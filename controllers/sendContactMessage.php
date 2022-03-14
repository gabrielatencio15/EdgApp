<?php


// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
require '../core/email/Exception.php'; 
require '../core/email/PHPMailer.php'; 
require '../core/email/SMTP.php'; 
//require '../views/all/emailTemplate/index.php'; 
 
$mail = new PHPMailer; 
 
$mail->isSMTP();                      // Set mailer to use SMTP 
$mail->Host = 'smtp-mail.outlook.com';       // Specify main and backup SMTP servers 
$mail->SMTPAuth = true;               // Enable SMTP authentication 
$mail->Username = 'enterprisedanitygroup@hotmail.com';   // SMTP username 
$mail->Password = 'EDG123456';   // SMTP password 
$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 587;                    // TCP port to connect to 
 
// Sender info 
$mail->setFrom('enterprisedanitygroup@hotmail.com', 'Enterprise Danity Group'); 
$mail->addReplyTo('enterprisedanitygroup@hotmail.com', 'Enterprise Danity Group'); 
 
// Add a recipient 
$mail->addAddress('gabriel_atencio@hotmail.com'); 
$mail->addAddress('enterprisedanitygroup@hotmail.com'); 
 
//$mail->addCC('cc@example.com'); 
//$mail->addBCC('bcc@example.com'); 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
// Mail subject 
$mail->Subject = 'EDG: Solicitud de Contacto'; 
 
//var_dump(file_get_contents("../views/all/emailTemplate/index.html"));
// Mail body content 
$bodyContent = file_get_contents("../views/all/emailTemplate/index.html");

$mail->Body    = $bodyContent; 
 
// Send email 
if(!$mail->send()) { 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
} else { 
    echo 'Message has been sent.'; 
} 

?>