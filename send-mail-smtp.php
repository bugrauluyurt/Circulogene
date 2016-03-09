<?php     
date_default_timezone_set('Europe/Athens');
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 2;                               // Enable verbose debug output
$mail->Debugoutput = 'html';

// Assigning data from the $_POST array to variables     
$name = $_POST['sender_name'];     
$mail_from = $_POST['sender_email'];     
$phone = $_POST['sender_phone'];     
$message = $_POST['sender_message'];       

// Construct email subject     
$subject = 'Mesajın geldigi musteri: ' . $name;       
// Construct email body     
$body_message = 'From: ' . $name . "\r\n";     
$body_message .= 'E-mail: ' . $mail_from . "\r\n";     
$body_message .= 'Phone: ' . $phone . "\r\n";     
$body_message .= 'Message: ' . $message; 

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.google.com';                      // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'myemail@gmail.com';                // SMTP username
$mail->Password = 'mypassword';                  // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($mail_from);
$mail->addAddress('myemail@gmail.com', 'John Doe');     // Add a recipient
$mail->addReplyTo($mail_from, 'Information');

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $body_message;

if(!$mail->send()) {
    echo 'Mesaj gonderilememistir.' . '<br>';
    echo 'Eposta hatasi: ' . $mail->ErrorInfo;
} else {
    echo 'Mesaj gonderilmistir.';
}
		   
?>