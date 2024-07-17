<?php
session_start();
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


send_password_reset();
function send_password_reset()
{
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $email = $_POST['email'];
        $name = $_POST['username'];
        $phone = $_POST['phone_number'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $photo_email = 'yam532004@yopmail.com';
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth   = true; // Enable SMTP authentication
        $mail->Username   = 'am.y25@student.passerellesnumeriques.org'; // SMTP username
        $mail->Password   = 'cnwn naqq gyzb avzz'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587; // TCP port to connect to

        // Sender and reply-to address
        $mail->setFrom($email, 'Contact with photographer');
        $mail->addReplyTo($photo_email, 'User email');
        $mail->addAddress($photo_email);


        $mail->isHTML(true);
        $mail->Subject = 'Contact with photographer';
        $mail->Body = "
        <h2>Contact with photographer</h2>
        <p>Hello Photographer </p>
        <p>You are receiving this email because <i>$name</i> want to provide you some information.</p>
        <p><b>Email: </b>$email</p>
        <p><b>Phone number: </b>$phone</p>
        <p><b>Subject: </b>$subject</p>
        <p><b>Message: </b>$message</p>
        <br>
        <p>Best regards,</p>
        <p>$name</p>
    ";
        // Send email
        $_SESSION['send_email'] = "Successfully to send email to photographer";
        $mail->send();
        header('location: index.php');
        exit();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
