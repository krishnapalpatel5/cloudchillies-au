<?php

// Enable error reporting for debugging
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
    // error_log("Session started in formSubmit.php");
} else {
    // error_log("Session already exists in formSubmit.php");

}
// Set secure headers
header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval' https:; style-src 'self' 'unsafe-inline' https:; img-src 'self' https: data:; font-src 'self' https: data:;");
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: SAMEORIGIN");
header("X-XSS-Protection: 1; mode=block");

// Include CSV storage functionality
require_once 'Lead-manager/formSubmissionHook.php';
// Allowed rate limit (per IP)
$MAX_REQUESTS_PER_MINUTE = 5;

// Enable honeypot field name
$HONEYPOT_FIELD = "website_url_fake"; 
// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to validate email
function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Basic user agent bot check
function is_bot_user_agent($userAgent) {
    if (empty($userAgent) || strlen($userAgent) < 20) {
        return true;
    }

    $ua = strtolower($userAgent);
    $botKeywords = [
        'bot',
        'crawl',
        'spider',
        'slurp',
        'wget',
        'curl',
        'httpclient',
        'python-requests'
    ];

    foreach ($botKeywords as $keyword) {
        if (strpos($ua, $keyword) !== false) {
            return true;
        }
    }

    return false;
}

// Function to validate phone number (basic validation)
function is_valid_phone($phone) {
    // Remove any non-digit characters
    $phone = preg_replace('/[^0-9]/', '', $phone);
    // Check if length is between 10 and 15 digits  
    return strlen($phone) >= 10 && strlen($phone) <= 15;
}


// Function to identify suspicious email patterns
function is_suspicious_email($fullName, $email) {
    if (!$email) return true;

    $parts = explode('@', $email);
    if (count($parts) !== 2) return true;

    $username = strtolower($parts[0]);
    $usernameClean = preg_replace('/[^a-z]/', '', $username);

    /**************
     * RULE 1: Generic repeated words (doedoe, testtest)
     **************/
    if (preg_match('/^([a-z]{3,})\1/', $usernameClean)) {
        return true;
    }

    /**************
     * RULE 2: Name-based repetition (if name exists)
     **************/
    if ($fullName) {
        $cleanName = strtolower(trim($fullName));
        $cleanName = preg_replace('/\b(mr|mrs|ms|dr|prof)\b\.?/i', '', $cleanName);
        $nameParts = preg_split('/\s+/', $cleanName);

        if (count($nameParts) >= 2) {
            $firstName = preg_replace('/[^a-z]/', '', $nameParts[0]);
            $lastName  = preg_replace('/[^a-z]/', '', end($nameParts));

            if (
                (strlen($firstName) >= 3 && substr_count($usernameClean, $firstName) > 1) ||
                (strlen($lastName) >= 3 && substr_count($usernameClean, $lastName) > 1)
            ) {
                return true;
            }
        }
    }

    return false;
}

// Prevent bots that submit forms instantly
function form_submitted_too_fast() {
    if (!isset($_POST["form_start_time"])) return true;

    $start = (int) $_POST["form_start_time"];
    $now = time();

    return ($now - $start < 3); // human needs at least 3 sec
}

// Rate limit by IP
function is_rate_limited($maxRequests, $windowSeconds = 60) {
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    $key = 'rate_' . md5($ip);

    if (!isset($_SESSION[$key])) {
        $_SESSION[$key] = [
            'count' => 1,
            'start' => time()
        ];
        return false;
    }

    $data = &$_SESSION[$key];

    // Reset window
    if (time() - $data['start'] > $windowSeconds) {
        $data = [
            'count' => 1,
            'start' => time()
        ];
        return false;
    }

    $data['count']++;

    return $data['count'] > $maxRequests;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Set secure headers
header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval' https:; style-src 'self' 'unsafe-inline' https:; img-src 'self' https: data:; font-src 'self' https: data:;");
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: SAMEORIGIN");
header("X-XSS-Protection: 1; mode=block");

// Initialize response array
$response = [
    'success' => false,
    'message' => '',
    'errors' => []
];

if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
    // Block likely bot submissions based on user agent
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    if (is_bot_user_agent($userAgent)) {
        http_response_code(400);
        header('Content-Type: application/json');
        throw new Exception('Invalid request');
        exit;
    }

    // BOT CHECK #1 — Honeypot
if (!empty($_POST[$HONEYPOT_FIELD])) {
    $response["message"] = "Bot detected (honeypot)";
    echo json_encode($response); exit;
}

// BOT CHECK #2 — Time Check
if (form_submitted_too_fast()) {
    $response["message"] = "Slow down. Suspicious behavior detected.";
    echo json_encode($response); exit;
}

// BOT CHECK #3 — User Agent Validation
if (is_bot_user_agent($_SERVER["HTTP_USER_AGENT"] ?? "")) {
    $response["message"] = "Invalid request";
    echo json_encode($response); exit;
}

// BOT CHECK #4 — Rate limiting
if (is_rate_limited($MAX_REQUESTS_PER_MINUTE)) {
    $response["message"] = "Too many attempts. Try again later.";
    echo json_encode($response); exit;
}

    try {
        // Initialize error array
        $errors = [];
        
        // Validate required fields
        $required_fields = [
            'full_name' => 'Name',
            'email' => 'Email',
            'phone_no' => 'Phone',
            //'company_name' => 'Company',
            // 'question' => 'Message'
        ];

        // Validate each required field
        foreach ($required_fields as $field => $label) {
            if (!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
                $errors[$field] = $label . ' is required';
            }
        }
        // BOT CHECK #5 — Suspicious email pattern



        // If no basic validation errors, proceed with detailed validation
        if (empty($errors)) {
            $name = sanitize_input($_POST["full_name"]);
            $email = sanitize_input($_POST["email"]);
            $mobile = sanitize_input($_POST["phone_no"]);
            // $country = sanitize_input($_POST["country"]);
            // $company = sanitize_input($_POST["company_name"]);
            $query = sanitize_input($_POST["question"]);
            $origin_from = isset($_POST["callingPage"]) ? sanitize_input($_POST["callingPage"]) : '';
            $subject = isset($_POST["section"]) ? sanitize_input($_POST["section"]) : '';
            
            // Validate Google reCAPTCHA
            if (!isset($_POST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response'])) {
                $errors['captcha'] = 'Please complete the captcha verification';
            } else {
                try {
                    $response_captcha = $_POST['g-recaptcha-response'];
                    $secret_key = '6LetXv0rAAAAAM16Ja7_ZkQeulKVbEYt1S62-nip';
                    
                    // Verify captcha with Google
                    $verify_url = "https://www.google.com/recaptcha/api/siteverify?secret={$secret_key}&response={$response_captcha}";
                    $verify_response = file_get_contents($verify_url);
                    
                    if ($verify_response === false) {
                        throw new Exception('Failed to connect to Google reCAPTCHA service');
                    }
                    
                    $captcha_result = json_decode($verify_response, true);
                    
                    if ($captcha_result === null) {
                        throw new Exception('Invalid response from Google reCAPTCHA service');
                    }
                    
                    if (!isset($captcha_result['success']) || !$captcha_result['success']) {
                        $error_codes = isset($captcha_result['error-codes']) ? implode(', ', $captcha_result['error-codes']) : 'Unknown error';
                        throw new Exception('Captcha verification failed: ' . $error_codes);
                    }
                    
                } catch (Exception $captcha_exception) {
                    $errors['captcha'] = 'Captcha verification error: ' . $captcha_exception->getMessage();
                    error_log("reCAPTCHA verification error: " . $captcha_exception->getMessage());
                }
            }
            
            // Validate name (2-50 characters, letters only)
            if (strlen($name) < 2 || strlen($name) > 50 || !preg_match("/^[a-zA-Z'. -]+$/", $name)) {
                $errors['full_name'] = 'Please enter a valid name (2-50 characters, letters only)';
            }

            // Validate email (format + work email only)
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Please enter a valid email address';
            } else {
                // Reject common public email providers; require work email
                $domain = '';
                $atPos = strrpos($email, '@');
                if ($atPos !== false) {
                    $domain = strtolower(substr($email, $atPos + 1));
                }

                // Utility: safe endsWith for PHP versions without str_ends_with
                $endsWith = function ($haystack, $needle) {
                    $length = strlen($needle);
                    if ($length === 0) return true;
                    return substr($haystack, -$length) === $needle;
                };

                $publicDomains = [
                    'gmail.com',
                    'yahoo.com',
                    'yahoo.co.uk',
                    'outlook.com',
                    'hotmail.com',
                    'live.com',
                    'icloud.com',
                    'me.com',
                    'aol.com',
                    'proton.me',
                    'protonmail.com',
                    'gmx.com',
                    'yandex.com',
                    'yandex.ru',
                    'zoho.com',
                    'mail.com',
                    'pm.me'
                ];

                $isPublic = false;
                foreach ($publicDomains as $d) {
                    if ($domain === $d || $endsWith($domain, '.'.$d)) {
                        $isPublic = true;
                        break;
                    }
                }

                if ($isPublic) {
                    $errors['email'] = 'Work email required only';
                }
            }

            // Validate phone (10-15 digits)
            $phone_cleaned = preg_replace('/[^0-9]/', '', $mobile);
            if (strlen($phone_cleaned) < 10 || strlen($phone_cleaned) > 15) {
                $errors['phone_no'] = 'Please enter a valid phone number';
            }

            // Validate company name
            //if (strlen($company) < 2 || strlen($company) > 100) {
              //  $errors['company_name'] = 'Company name must be between 2 and 100 characters';
            //}

            // Validate message
            // if (strlen($query) < 10 || strlen($query) > 2000) {
            //     $errors['question'] = 'Message must be between 10 and 2000 characters';
            // }

            // If validation errors exist, throw exception
            if (!empty($errors)) {
                throw new Exception('Validation failed');
            }

            $mail = new PHPMailer(true);

            try 
            {
                // Store form submission in CSV after successful email sending
                $formDataForCSV = [
                    'full_name' => $name,
                    'email' => $email,
                    'phone_no' => $mobile,
                    'subject' => $subject,
                    'question' => $query ?? 'N/A',
                    'callingPage' => $origin_from
                ];
                
                $csvStored = storeFormSubmission($formDataForCSV);
                
                if (!$csvStored) {
                    error_log("Warning: Email sent but failed to store form submission in CSV");
                }
                $htmlTemplate = file_get_contents('emailTemplate.html');

                $htmlTemplate = str_replace('[SUBJECT]', $origin_from, $htmlTemplate);
                $htmlTemplate = str_replace('[NAME]', $name, $htmlTemplate);
                $htmlTemplate = str_replace('[EMAIL]', $email, $htmlTemplate);
                $htmlTemplate = str_replace('[MOBILE]', $mobile, $htmlTemplate);
                // $htmlTemplate = str_replace('[COMPANY]', $company, $htmlTemplate);
                // $htmlTemplate = str_replace('[COUNTRY]', $country, $htmlTemplate);
                $htmlTemplate = str_replace('[QUERY]', $query, $htmlTemplate);
                $htmlTemplate = str_replace('[ORIGIN]',$subject, $htmlTemplate);
                $htmlTemplate = str_replace('[MYCOMPANY]', 'Lending Logik', $htmlTemplate);

                //Server settings
                $mail->SMTPDebug = false;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.ionos.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = false;                                   //Enable SMTP authentication
                $mail->Username   = 'smtp_essl@ideavate.com';                     //SMTP username
                $mail->Password   = 'IDVT@123';           
                $mail->SMTPAuth = true;   
                $mail->SMTPSecure = false;                 //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_SMTPS`
                                                //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_SMTPS`


                // Recipients
                 $mail->setFrom('smtp_essl@ideavate.com', 'Cloud Chillies');
                //  $mail->addAddress('shishir@cloudchillies.com');
                //  $mail->addAddress('sateesh@cloudchillies.com');
                //  $mail->addAddress('narendra@cloudchillies.com');
                //$mail->addAddress('rashmi@mindruby.com', '');
                // $mail->addAddress('manish.kotia@mindruby.com'); 
                if (is_suspicious_email($name, $email)) {
                    $mail->addAddress('piyush.chourey@mindruby.com'); 
                    }else{
                                    // $mail->addAddress('shishir@cloudchillies.com');
                                    // $mail->addAddress('sateesh@cloudchillies.com');
                                    // $mail->addAddress('narendra@cloudchillies.com');
                                    $mail->addAddress('yogesh.joshi@mindruby.com');
                                    $mail->addAddress('pankaj.patidar@mindruby.com'); 
                    }


// $mail->addAddress('yogesh.joshi@mindruby.com'); 
                //Add a recipient
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');

                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                // Content
                $mail->isHTML(true);
                $mail->Subject = "Contact us form submission-Cloud Chillies-Australia $origin_from";
                $mail->Body    = $htmlTemplate; 

               ob_flush();
                flush();
                if ($mail->send()) {
                    ob_flush();
                    flush();
                    echo json_encode([
                        "success" => true,
                        "message" => "Thank you for your message. We will contact you soon.",
                        "errors" => []
                    ]);
                    exit;
                }
                
            }catch (Exception $e) {
                // Handle validation errors
                $response['success'] = false;
                if (!empty($errors)) {
                    $response['errors'] = $errors;
                    $response['message'] = 'Please correct the errors in your submission.';
                } else {
                    $response['message'] = 'Sorry, there was an error processing your request.'.$e->getMessage();
                    error_log("Form processing error: " . $e->getMessage());
                }
            }
        } else {
            // Handle validation errors from required fields check
            $response['success'] = false;
            $response['errors'] = $errors;
            $response['message'] = 'Please fill in all required fields.';
        }
    } catch (Exception $e) {
        // Handle validation errors
        $response['success'] = false;
        if (!empty($errors)) {
            $response['errors'] = $errors;
            $response['message'] = 'Please correct the errors in your submission.';
        } else {
            $response['message'] = 'Sorry, there was an error processing your request.';
            error_log("Form processing error: " . $e->getMessage());
        }
    }
} else {
    // Not a POST request
    $response['success'] = false;
    $response['message'] = 'Invalid request method';
    http_response_code(405); // Method Not Allowed
}

// Clear any output buffers
while (ob_get_level()) ob_end_clean();

// Send JSON response
header('Content-Type: application/json');
echo json_encode($response);
exit;
