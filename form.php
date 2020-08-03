<?php
  $name = trim(strip_tags($_POST["name"]));
  $birthday = trim(strip_tags($_POST["birthday"]));
  $helth = trim(strip_tags($_POST["helth"]));
  $fear = trim(strip_tags($_POST["fear"]));
  $yourphone = trim(strip_tags($_POST["yourphone"]));
  $motherphone = trim(strip_tags($_POST["motherphone"]));
  $fatherphone = trim(strip_tags($_POST["fatherphone"]));
  $smock = trim(strip_tags($_POST["smock"]));
  $alcohol = trim(strip_tags($_POST["alcohol"]));
  $subject = "Регистрация на выезд клуба в_теме";
  $msg = "Ваши данные формы регистрации:\n" ."Имя: $name\n" ."ДатаРождения: $birthday\n" ."Здоровье: $helth\n" ."Страхи: $fear"\n . ."ТвойНомер: $yourphone"\n . "телефонМамы: $motherphone"\n ."телефонПапы: $fatherphone\n" ."курение: $smock\n" ."алкоголь: $alcohol\n";
  $headers = "Content-type: text/plain; charset=UTF-8" . "\r\n";
  $headers .= "From: work@life-code144.site" . "\r\n";
  $headers .= "Bcc: graflegion2277@yandex.ru". "\r\n";
  if(!empty($name) && !empty($sex) && !empty($email) && !empty($country) && filter_var($email, FILTER_VALIDATE_EMAIL)){
    mail($email, $subject, $msg, $headers);
    echo "Спасибо! Вы успешно зарегистрировались.";
    }
?>