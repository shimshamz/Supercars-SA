<?php 
require 'PHPMailerAutoload.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$from = $_POST['mail'];
$header = "From: $from";
$msg= $_POST['msg'];
$subject = "Website Contact Form: " . $fname . " " . $lname;
$to = "info.supercarssa@gmail.com";

$mail = new PHPMailer;
$mail->SMTPDebug = 2; 
$mail->isSMTP();

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "info.supercarssa@gmail.co.za";

//Password to use for SMTP authentication
$mail->Password = "PearlWhite86";

$mail->setFrom($from, $fname . ' ' . $lname);
$mail->addAddress($to);
$mail->addReplyTo($from, $fname);
$mail->Subject  = $subject;
$mail->Body     = "Message sent from: " . $fname . " " . $lname . "\r\nEmail: " . $from . "\r\nBody: " . $msg . "";
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}
?>