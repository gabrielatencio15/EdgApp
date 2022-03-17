<?php

//ini_set('display_errors', 1);

if( (!isset($_POST['names']) || empty($_POST['names'])) || (!isset($_POST['lastnames']) || empty($_POST['lastnames'])) || (!isset($_POST['email']) || empty($_POST['email'])) || (!isset($_POST['nacionality']) || empty($_POST['nacionality'])) || (!isset($_POST['message']) || empty($_POST['message'])))
{
    echo 'Empty field';
    exit(); 
}


date_default_timezone_set('America/Bogota');

$nombres = strip_tags($_POST['names']);
$apellidos = strip_tags($_POST['lastnames']);
$email = strip_tags($_POST['email']);
$nacionalidad = strip_tags($_POST['nacionality']);
$mensaje = strip_tags($_POST['message']);
$fechaRecibido = date('Y-m-d H:i:s');

// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require '../core/email/Exception.php'; 
require '../core/email/PHPMailer.php'; 
require '../core/email/SMTP.php'; 

//DB Connection
require_once '../models/db_connection.php';

$smtp_name = queryParams("SMTP_Name")[0]->value;
$smtp_password = queryParams("SMTP_Password")[0]->value;
$smtp_recipients = queryParams("Contact_Recipient_To");
 

$mail = new PHPMailer; 
 
$mail->isSMTP();                      // Set mailer to use SMTP 
$mail->Host = 'smtp-mail.outlook.com';       // Specify main and backup SMTP servers 
$mail->SMTPAuth = true;               // Enable SMTP authentication 

//Cambiar SMTP aquí.
$mail->Username = $smtp_name;  // SMTP username 
$mail->Password = $smtp_password;   // SMTP password 



$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 587;                    // TCP port to connect to 
 
// Sender info 
$mail->setFrom('enterprisedanitygroup@hotmail.com', 'Enterprise Danity Group'); 
$mail->addReplyTo('enterprisedanitygroup@hotmail.com', 'Enterprise Danity Group'); 
 
// Add a recipient 
foreach ($smtp_recipients as $email_recipient)
{
    $mail->addAddress($email_recipient->value);
}

//$mail->addCC('cc@example.com'); 
//$mail->addBCC('bcc@example.com'); 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
// Mail subject 
$mail->Subject = 'EDG: Solicitud de Contacto'; 
 
// Mail body content 
$bodyContent = file_get_contents("../views/all/emailTemplate/emailTemplate.html");

$bodyContent = str_replace("___NAMES___", $nombres, $bodyContent);
$bodyContent = str_replace("___LASTNAMES___", $apellidos, $bodyContent);
$bodyContent = str_replace("___EMAIL___", $email, $bodyContent);
$bodyContent = str_replace("___NATIONALITY___", $nacionalidad, $bodyContent);
$bodyContent = str_replace("___MESSAGE___", $mensaje, $bodyContent);
$bodyContent = str_replace("___MESSAGEDATE___", $fechaRecibido, $bodyContent);

$mail->Body    = utf8_decode($bodyContent); 
 
// Send email 
if(!$mail->send()) { 
    echo 'Failed';//'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
} else { 
    echo 'Sent'; 
} 

?>