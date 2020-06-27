<?php
    


$message = "your mail verification code is $r";
	
$to = "$email"; 
$email_subject = "Website Contact Form:  $name";
$email_body = $message;
$headers = "From: shbhmtwr19@gmail.com\n";
mail($to,$email_subject,$email_body,$headers);

    
    
    
    ?>
