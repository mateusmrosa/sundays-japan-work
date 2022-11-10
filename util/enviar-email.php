<?php

/**import do phpmailer */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
/**import do phpmailer */

/**import do autoload para envio de email */
require '../vendor/autoload.php';
/**import do autoload para envio de email */

/**import da classe funcoes */
require_once('../util/Funcoes.php');
/**import da classe funcoes */

$mail = new PHPMailer(true);

$funcoes = new Funcoes();
$dataEmbarque = $funcoes::formatarDataBR($_POST['dataEmbarque']);
var_dump($dataEmbarque);
exit;

try {
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    // $mail->SMTPDebug = 1; 
    $mail->Host       = 'smtp.mailtrap.io';
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Username   = '56e2ef249902d4';
    $mail->Password   = '7901837cc3790b';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 2525;

    $mail->setFrom('teste@sundays.com.br', 'Sundays');
    $mail->addAddress("teste@sundays.com.br", "Sundays");

    $mail->isHTML(true);
    $mail->Subject = 'Email com Curriculum de pretendente de viagem';
    $mail->Body    = '<div style="font-family: Montserrat; text-align: center;"> 

        CORPO DO EMAIL TESTE

                    </div> ';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'ok';

    // return true;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
