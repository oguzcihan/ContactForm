<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$email=isset($_POST['email']) ? $_POST['email']:null;
$subject=isset($_POST['subject']) ? $_POST['subject']:'E-posta Konusu';
$content=isset($_POST['content']) ? $_POST['content']:null;
$name=isset($_POST['name'])? $_POST['name']:null;


if(!$email){
    echo 'e-posta giriniz';
}elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo 'lütfen geçerli mail giriniz';
}elseif(!$content){
    echo 'içeriği giriniz..';
}else {

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'emailAdresiniz';
        $mail->Password = 'şifre';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->CharSet='UTF-8';

        //mail gönderen kişi
        $mail->setFrom($email,$name);
        $mail->addAddress('mailingelecegiadres');
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $content;

        $mail->send();
        header("Location:index.php?ok=0");

    } catch (Exception $ex) {
        echo $ex->errorMessage();
        header("Location:index.php?err=1");

    }
}