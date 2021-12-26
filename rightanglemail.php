<?php
if(isset($_POST["submit_btn"]))
{
   if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["contact"]))
   {
         $to_email = "contact@arovaexports.com";
         $name = $_POST["name"];
         $email = $_POST["email"];
         $contact = $_POST["contact"];
         $country = $_POST["country"];
         $message = $_POST["message"];

         $subject = "Inquiry Received From: ".$name."--Contact:". $contact;
      
         $body = "Sender Email: ".$email."\n". $message . "\n\nContact Number: ". $contact."\n\nCountry: ".$country;
      

         $headers = "From: contact@arovaexports.com";

         if (mail($to_email, $subject, $body, $headers)) 
         {
            
               echo '<script language="javascript">
                     alert("Inquiry successfully sent. We will communicate with you in a short time!")
                     </script>
                     <link rel="stylesheet" href="css/neat_button.css">
                     <div style="padding: 40px; background-color: #333;">

                        <div class="button">
                              <a href="/index.html">
                                 <p>Back to Home</p>
                              </a>
                        </div>
                     </div>';
      
            //Redirect to a success page

         } 
         else {
            echo '<script language="javascript">
                     alert("Failed to send the Inquiry. Please email us at contact@skgcombines.com")
                     </script>
                     <link rel="stylesheet" href="css/neat_button.css">
                     <div style="padding: 40px; background-color: #333;">

                        <div class="button">
                              <a href="/index.html">
                                 <p>Back to Home</p>
                              </a>
                        </div>
                     </div>';

            //Redirect to a failure page
         }
   }
   else
   {
      //Error Page
      echo "Please fill all the required details for the inquiry";
   }
}
else{
   echo "error";
}
?>