<?php
$to = "elnura_85.02@mail.ru";
$subject = "Заявка с сайта ARC";
$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];

$headers = "From: $email\r\nReply-To: $email\r\nContent-type: text/plain; charset=utf-8\r\n";
$body = "Имя: $name\nEmail: $email\nКомментарий:\n$message";

if(mail($to, $subject, $body, $headers)){
    echo "Спасибо! Ваша заявка отправлена.";
} else {
    echo "Ошибка отправки. Попробуйте позже.";
}
?>