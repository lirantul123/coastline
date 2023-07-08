<?php
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Create a new PHPMailer instance
$mail = new PHPMailer\PHPMailer\PHPMailer();

// SMTP configuration (replace with your own)
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'your-email@gmail.com';
$mail->Password = 'your-email-password';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Set sender and recipient
$mail->setFrom('your-email@gmail.com', 'Your Name');
$mail->addAddress('lira.tulchin@gmail.com', 'Lira Tulchin');

// Set email content
$mail->isHTML(false);
$mail->Subject = 'New Contact Form Submission';
$mail->Body = "Name: $name\nEmail: $email\nMessage: $message";

// Send the email
if ($mail->send()) {
    echo 'Email sent successfully!';
} else {
    echo 'Email could not be sent.';
}
