<?php
include_once __DIR__ . '/../smtp/PHPMailerAutoload.php';
global $username, $password, $name;


function smtp_mailer($to, $subject, $msg)
{
    $username = "pinkysahani.dev@gmail.com";
    $password = "vdilwxqpvhogmcma";
    $name = "Ishiclinic"; 


    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    // SMTP Credentials
    $mail->Username = $username;
    $mail->Password = $password;
    $mail->SetFrom($username, $name);
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->AddAddress($to);

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => false
        )
    );

    if ($mail->Send()) {
        return true;
    } else {
        return false;
    }
}
