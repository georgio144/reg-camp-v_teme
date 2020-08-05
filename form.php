<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$datab = $_POST['birthday'];
$zdorovie = $_POST['helth'];
$strahi = $_POST['fear'];
$phoneme = $_POST['yourphone'];
$phonemama = $_POST['motherphone'];
$phonepapa = $_POST['fatherphone'];
$kurit = $_POST['smock'];
$sinka = $_POST['alcohol'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.hosting.reg.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'reg@camp.life-code144.site'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'T4v7Y0q4'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('reg@camp.life-code144.site'); // от кого будет уходить письмо?
$mail->addAddress('work@life-code144.site');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Регистрация на летний выезд клуба в_теме';
$mail->Body    = '' .$name . '  зарегистрировался, его день рождения ' .$datab. '<br />его состояние здоровья' .$zdorovie.'<br />его страхи'.$strahi.'<br />его телефон' .$phoneme.'<br />номер его мамы '.$phonemama.'<br />телефон его папы '.$phonepapa.'<br />он курит '.$kurit.'<br />он употребляет алкоголь ' .$sinka;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>