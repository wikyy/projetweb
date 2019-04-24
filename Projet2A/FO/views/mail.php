<?php
include "../entities/employe.php";
include "../core/employeC.php";
//if (isset($_POST['nom']) and isset($_POST['sujet']) and isset($_POST['num']) and isset($_POST['message']) and (!preg_match ( " #^[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}?$# " , $_POST['num'] )) and ( !preg_match ( " /^.+@.+\.[a-zA-Z]{2,}$/ " , $_POST['sujet'] ) ))
//{
$mailto ="mortagameover@gmail.com";
    $mailSub ="Reclamation";
    $mailMsg ="vous n'avais pas traité ma reclamations";
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "mortagameover@gmail.com";
   $mail ->Password = "mortadda11";
   $mail ->SetFrom("mortagameover@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }
//}

   ?>