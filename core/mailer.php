<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require 'MailerConfig.php';

function SendMail ($email, $subject, $body)
{
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = HOST ;
    $mail->Password = PASS ;
    $mail->Username = USER ;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port=587;
    $mail->setFrom(SEND_FROM,SEND_FROM_NAME);
    $mail->addAddress($email);
    $mail->addReplyTo(REPLAY_TO,REPLAY_TO_NAME);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AltBody = $body;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    if (!$mail->send()) {
        dd("Mailer Error: " . $mail->ErrorInfo);
        return "Mailer Error: " . $mail->ErrorInfo;
    }
    else {
        //dd("Message has been sent");
        return true;
    }

}
