

<?php

   $to_email = "piyurupareliya@gmail.com ";

   $name = $_POST["name"];

   $email = $_POST["email"];

   $subject = "Inquiry Received From: ".$name;

  

   $body = "Sender Email: ".$email."\n".$_POST["message"];

   $headers = "From: satishchand.chandarana@gmail.com";

 

   if ( mail($to_email, $subject, $body, $headers)) {

      echo("Email successfully sent to $to_email...");

   } else {

      echo("Email sending failed...");

   }

?>