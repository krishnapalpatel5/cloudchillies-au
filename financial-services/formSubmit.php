<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
    $name = test_input($_POST["full_name"]);
    $email = test_input($_POST["email"]);
    $mobile = test_input($_POST["phone_no"]);
    $country = test_input($_POST["country"]);
    $company = test_input($_POST["company_name"]);
    $query = test_input($_POST["question"]);
    $origin_from = test_input($_POST["callingPage"]);
    $subject = test_input($_POST["subject"]);

    $mail = new PHPMailer(true);

    try 
    {
        $htmlTemplate = file_get_contents('emailTemplate.html');

        $htmlTemplate = str_replace('[SUBJECT]', $subject, $htmlTemplate);
        $htmlTemplate = str_replace('[NAME]', $name, $htmlTemplate);
        $htmlTemplate = str_replace('[EMAIL]', $email, $htmlTemplate);
        $htmlTemplate = str_replace('[MOBILE]', $mobile, $htmlTemplate);
        $htmlTemplate = str_replace('[COMPANY]', $company, $htmlTemplate);
        $htmlTemplate = str_replace('[COUNTRY]', $country, $htmlTemplate);
        $htmlTemplate = str_replace('[QUERY]', $query, $htmlTemplate);
        $htmlTemplate = str_replace('[ORIGIN]', $origin_from, $htmlTemplate);
        $htmlTemplate = str_replace('[MYCOMPANY]', 'Lending Logik', $htmlTemplate);

        // Server settings
        $mail->SMTPDebug = 0; // Set to 2 for detailed debug output
        $mail->isSMTP();
        $mail->Host       = 'smtp.ionos.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'smtp_essl@ideavate.com';
        $mail->Password   = 'IDVT@123';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('smtp_essl@ideavate.com', 'Cloud Chillies-Financial Services(Australia)');
        //$mail->addAddress('shubham.patidar@mindruby.com', 'developer');
        //$mail->addAddress('shishir@cloudchillies.com', 'founder');
        //$mail->addAddress('sateesh@cloudchillies.com', 'founder');
        //$mail->addAddress('narendra@cloudchillies.com', '');
        //$mail->addAddress('rashmi@mindruby.com', '');
        //$mail->addAddress('manish.kotia@mindruby.com', 'designer'); 
	$mail->addAddress('yogesh.joshi@mindruby.com');
        //Add a recipient
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        // Content
        $mail->isHTML(true);
        $mail->Subject = "Contact us form submission-Financial Services $origin_from";
        $mail->Body    = $htmlTemplate;

        $mail->send();

        // Redirect with success message (basic way)
        echo 'Message has been sent';
        exit();
    } 
    catch (Exception $e) 
    {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} 
else 
{
    echo "Form not submitted";
}
?>
