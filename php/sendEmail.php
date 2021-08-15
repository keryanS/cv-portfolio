<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.fr';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'kevinkotcherga@kevinkotcherga.fr';
    $mail->Password = 'Salutsalut0000';
    $mail->setFrom('kevinkotcherga@kevinkotcherga.fr', 'Kevin');
    $mail->addAddress('kevinkotcherga@kevinkotcherga.fr', 'Kevin');
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'Formulaire de contact PHPMailer';
        $mail->isHTML(false);
        $mail->Body = <<<EOT
E-mail: {$_POST['email']}
Nom: {$_POST['name']}
Message: {$_POST['message']}
EOT;
        if (!$mail->send()) {
            $msg = 'Désolé, quelque chose a mal tourné. Veuillez réessayer plus tard.';
        } else {
            $msg = 'Message envoyé ! Merci de nous avoir contactés.';
        }
    } else {
        $msg = 'Partagez-les avec nous !';
    }
?>