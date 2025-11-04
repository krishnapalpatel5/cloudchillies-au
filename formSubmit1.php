<?php
// Set secure headers
header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval' https:; style-src 'self' 'unsafe-inline' https:; img-src 'self' https: data:; font-src 'self' https: data:;");
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: SAMEORIGIN");
header("X-XSS-Protection: 1; mode=block");


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

// Function to validate phone number (basic validation)
function is_valid_phone($phone) {
    // Remove any non-digit characters
    $phone = preg_replace('/[^0-9]/', '', $phone);
    // Check if length is between 10 and 15 digits  
    return strlen($phone) >= 10 && strlen($phone) <= 15;
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
    try {
        // Initialize error array
        $errors = [];
        
        // Validate required fields
        $required_fields = [
            'full_name' => 'Name',
            'email' => 'Email',
            'phone_no' => 'Phone',
            'company_name' => 'Company',
            'question' => 'Message'
        ];

        // Validate each required field
        foreach ($required_fields as $field => $label) {
            if (!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
                $errors[$field] = $label . ' is required';
            }
        }

        // If no basic validation errors, proceed with detailed validation
        if (empty($errors)) {
            $name = sanitize_input($_POST["full_name"]);
            $email = sanitize_input($_POST["email"]);
            $mobile = sanitize_input($_POST["phone_no"]);
            $country = sanitize_input($_POST["country"]);
            $company = sanitize_input($_POST["company_name"]);
            $query = sanitize_input($_POST["question"]);
            $origin_from = isset($_POST["callingPage"]) ? sanitize_input($_POST["callingPage"]) : '';
            $subject = isset($_POST["section"]) ? sanitize_input($_POST["section"]) : '';

            // Validate name (2-50 characters, letters only)
            if (strlen($name) < 2 || strlen($name) > 50 || !preg_match("/^[a-zA-Z'. -]+$/", $name)) {
                $errors['full_name'] = 'Please enter a valid name (2-50 characters, letters only)';
            }

            // Validate email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Please enter a valid email address';
            }

            // Validate phone (10-15 digits)
            $phone_cleaned = preg_replace('/[^0-9]/', '', $mobile);
            if (strlen($phone_cleaned) < 10 || strlen($phone_cleaned) > 15) {
                $errors['phone_no'] = 'Please enter a valid phone number';
            }

            // Validate company name
            if (strlen($company) < 2 || strlen($company) > 100) {
                $errors['company_name'] = 'Company name must be between 2 and 100 characters';
            }

            // Validate message
            if (strlen($query) < 10 || strlen($query) > 2000) {
                $errors['question'] = 'Message must be between 10 and 2000 characters';
            }

            // If validation errors exist, throw exception
            if (!empty($errors)) {
                throw new Exception('Validation failed');
            }

            $mail = new PHPMailer(true);

            try 
            {
                $htmlTemplate = file_get_contents('emailTemplate.html');

                $htmlTemplate = str_replace('[SUBJECT]', $origin_from, $htmlTemplate);
                $htmlTemplate = str_replace('[NAME]', $name, $htmlTemplate);
                $htmlTemplate = str_replace('[EMAIL]', $email, $htmlTemplate);
                $htmlTemplate = str_replace('[MOBILE]', $mobile, $htmlTemplate);
                $htmlTemplate = str_replace('[COMPANY]', $company, $htmlTemplate);
                $htmlTemplate = str_replace('[COUNTRY]', $country, $htmlTemplate);
                $htmlTemplate = str_replace('[QUERY]', $query, $htmlTemplate);
                $htmlTemplate = str_replace('[ORIGIN]',$subject, $htmlTemplate);
                $htmlTemplate = str_replace('[MYCOMPANY]', 'Lending Logik', $htmlTemplate);

                //Server settings
                $mail->SMTPDebug = 1;                      //Enable verbose debug output
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
                $mail->addAddress('shishir@cloudchillies.com');
                $mail->addAddress('sateesh@cloudchillies.com');
                $mail->addAddress('narendra@cloudchillies.com');
                //$mail->addAddress('rashmi@mindruby.com', '');
                $mail->addAddress('manish.kotia@mindruby.com'); 
                //$mail->addAddress('pankaj.patidar@mindruby.com'); 

                //Add a recipient
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');

                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                // Content
                $mail->isHTML(true);
                $mail->Subject = "Contact us form submission-Cloud Chillies $origin_from";
                $mail->Body    = $htmlTemplate;

                $mail->send();

                // Set success response
                $response['success'] = true;
                $response['message'] = 'Thank you for your message. We will contact you soon.';
                
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