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

function getPDFPathByCompany($companyName) {
    // Convert company name to lowercase for consistent matching
    $company = strtolower(trim($companyName));
    
    // Define mapping of company names to their respective PDF files
    $pdfMapping = [
        'capify' => 'assets/capify.pdf',
        'brickworks' => 'assets/brickworks.pdf',
        'caritas' => 'assets/caritas.pdf',
        'rasie' => 'assets/raise.pdf',
        'smart-group' => 'assets/smart-group.pdf',
        'regents' => 'assets/regents.pdf',
        'swift' => 'assets/swift-loans.pdf',
        'thn' => 'assets/thn-capitals.pdf',
        'oz-cash' => 'assets/oz-cash.pdf',
        'speedy' => 'assets/speedy-finance.pdf',
        'alsco' => 'assets/alsco.pdf',
        'smart-leasing' => 'assets/smart-leasing.pdf',
        'ift' => 'assets/ift.pdf',
        'mnd' => 'assets/mnd-NSW.pdf',
        'obk' => 'assets/obk.pdf',
        'homevestors' => 'assets/homevestors.pdf',
        'abc' => 'assets/abc.pdf',

    ];
    
    // Return the corresponding PDF path or default if company not found
    return isset($pdfMapping[$company]) ? $pdfMapping[$company] : $pdfMapping['default'];
}

if ($_SERVER["REQUEST_METHOD"] === "POST") 
{

    $name = test_input($_POST["name"]);
    $email = test_input($_POST["company_email"]);
    $subject = test_input($_POST["subject"]);
    $companyName = test_input($_POST["company_name"]);
    

    $mail = new PHPMailer(true);

    try 
    {
        $companyTemplate = file_get_contents('companyTemplate.html');

        $clientTemplate = file_get_contents('clientTemplate.html');
        
        $origin_from = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : 'Direct';


        $companyTemplate = str_replace('[SUBJECT]', $subject, $companyTemplate);

        $companyTemplate = str_replace('[NAME]', $name, $companyTemplate);
        $companyTemplate = str_replace('[EMAIL]', $email, $companyTemplate);
        $companyTemplate = str_replace('[COMPANY_NAME]', ucwords(strtolower($companyName)), $companyTemplate);
      
 
        // Server settings
        $mail->SMTPDebug = 2; // Set to 2 for detailed debug output
        $mail->isSMTP();
        $mail->Host       = 'smtp.ionos.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'smtp_essl@ideavate.com';
        $mail->Password   = 'IDVT@123';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;



 $mail->setFrom('smtp_essl@ideavate.com', 'Cloud Chillies');
            // -------------------------
    $clientMail = clone $mail; // clone PHPMailer object
    $clientMail->addAddress($email, $name);  // client email
    $clientMail->Subject = "Thank you for Download the PDF.";
    // $clientMail->Body    = "Dear $clientName,<br><br>Thank you for reaching out. We will contact you soon.<br><br>Best Regards,<br>Financial Services";
    $clientMail->isHTML(true);
    $clientMail->Body    = $clientTemplate;
    
    // Attach PDF based on company name
    $pdfPath = getPDFPathByCompany($companyName);
    $pdfFileName = basename($pdfPath);
    $clientMail->addAttachment($pdfPath, $pdfFileName);
    //$clientMail->addAttachment("assets/Lending Logik Presentation.pdf", "Lending Logik Presentation.pdf");


    // -------------------------
    // 2️⃣ Send email to company
    // -------------------------
    $companyMail = clone $mail; // clone PHPMailer object
     $companyMail->isHTML(true);
     //$companyMail->addAddress('manish.kotia@mindruby.com', 'designer'); 
     //$companyMail->addAddress('pankaj.patidar@mindruby.com', 'designer'); 
     $companyMail->addAddress('shishir@cloudchillies.com'); 
     $companyMail->addAddress('sateesh@cloudchillies.com'); 
     $companyMail->addAddress('narendra@cloudchillies.com'); 
     $companyMail->addAddress('rashmi@cloudchillies.com'); 

    $companyMail->Subject = "Download Success Story form submission - Cloud Chillies $origin_from";
    $companyMail->Body    = $companyTemplate; // your form HTML details
    $companyMail->isHTML(true);

        // Recipients
       
        //$mail->addAddress('shubham.patidar@mindruby.com', 'developer');
       // $mail->addAddress('shishir@cloudchillies.com', 'founder');
       // $mail->addAddress('sateesh@cloudchillies.com', 'founder');
       // $mail->addAddress('narendra@cloudchillies.com', '');
        //$mail->addAddress('rashmi@mindruby.com', '');

        //Add a recipient
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        // Content
       

        $clientMail->send();
        $companyMail->send();
     

        // Return JSON response
        echo json_encode(['status' => 'success', 'message' => 'Message has been sent successfully']);
        exit();
    } 
    catch (Exception $e) 
    {
        echo "Message could not be sent. Mailer Error: $e";
    }
} 
else 
{
    echo "Form not submitted";
}
?>