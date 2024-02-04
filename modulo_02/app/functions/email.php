<?php

function send(object $data)
{
    $to = 'jeancarlosantonio@gmail.com';
    $subject = $data->subject;
    $message = $data->message;

    $headers = "From: {$data->email}\r\n";
    $headers .= "Reply-to: jeancarlosantonio@gmail.com\r\n";
    $headers .= "X-Mailer: PHP/";
    $headers .= phpversion();

    return mail($to, $subject, $message, $headers);
}

function sendPHPMailer(array $data)
{
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth   = true;
        $mail->Username   = '';
        $mail->Password   = '';
        $mail->SMTPSecure = 'plain';
        $mail->Port       = 2525;

        //Recipients
        $mail->setFrom($data['email']);
        $mail->addAddress('exemplo@gmail.com');

        //Content
        $mail->isHTML(true);
        $mail->Subject = $data['subject'];
        $mail->Body    = $data['message'];
        $mail->AltBody = 'Para ver este e-mail, tenha certeza de estar vendo em um programa com suporte à HTML.';
        $mail->msgHTML($data['message']);

        return $mail->send();
    } catch (Exception $e) {
        echo "O e-mail não pode ser enviado. Erro: {$mail->ErrorInfo}";
    }
}
