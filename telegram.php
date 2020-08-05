<?php

/* https://api.telegram.org/bot1182504414:AAE1qr0naaGTunURWLQm4kW01RigTQhjAnw/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$datab = $_POST['birthday'];
$zdorovie = $_POST['helth'];
$strahi = $_POST['fear'];
$telephone1 = $_POST['yourphone'];
$telephone2 = $_POST['motherphone'];
$telephone3 = $_POST['fatherphone'];
$kurit = $_POST['smock'];
$sinka = $_POST['alcohol'];
$token = "1182504414:AAE1qr0naaGTunURWLQm4kW01RigTQhjAnw";
$chat_id = "-476509514";
$arr = array(
  'Имя пользователя: ' => $name,
  'Дата рождения: ' => $datab,
  'Сведения о здоровье: ' => $zdorovie,
  'Его страхи: ' => $strahi,
  'Его номер: ' => urlencode('+'). $telephone1,
  'Телефон мамы: ' => urlencode('+'). $telephone2,
  'Телефон папы: ' => urlencode('+'). $telephone3,
  'Он курит: ' => $kurit,
  'Употребляет алкоголь: ' => $sinka,
  
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>