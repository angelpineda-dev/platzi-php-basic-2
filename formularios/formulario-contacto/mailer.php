<?php
//Load Composer's autoloader
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendMail($subject, $body, $email, $name, $is_html = false){
    
    $phpmailer = new PHPMailer();

    try{
        // Initial config for our mail server
        $phpmailer->isSMTP();
        $phpmailer->Host = 'smtp.gmail.com';
        $phpmailer->SMTPAuth = true;
        $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $phpmailer->Port = 465;
        $phpmailer->Username = 'correo-real@dominio-real.com';
        $phpmailer->Password = 'sssssssopasmorro';

        // Adding recipients
        $phpmailer->setFrom('contact@mycompany.com', 'My company');
        $phpmailer->addAddress($email, $name);

        // Defining email content
        $phpmailer->isHTML($is_html); //Set email format to HTML
        $phpmailer->Subject = $subject;
        $phpmailer->Body = $body;

        // Sending email
        $phpmailer->send();
    }catch(Exception $error){
        var_dump($error);
    }
}