<?php

  require("vendor/phpmailer/phpmailer/src/PHPMailer.php");
  require("vendor/phpmailer/phpmailer/src/SMTP.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "gofit2022bythefive@gmail.com";
    $mail->Password = "bphbqbdqmnnmtoli";
    $mail->SetFrom("gofit2022bythefive@gmail.com");
    $mail->Subject = "Bilan de jour";
    $mail->Body = 'Bilan de jour';
    $mail->AddAddress("amaltr21@gmail.com");

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        header('location:index.php');
       

     }
?>