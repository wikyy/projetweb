<?php
    $mailto ="ahmed.yahyaoui.1@esprit.tn";
    $mailSub = "nouvelle promotion";
    $mailMsg = "vous avez une nouvelle promotion";
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "ahmed.yahyaoui.1@esprit.tn";
   $mail ->Password = "nagato6p";
   $mail ->SetFrom("ahmed.yahyaoui.1@esprit.tn");
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





   

