<?php

$to      = $email;
$subject = 'Activation | Verification';
$message = "
  
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.

Username: '.$name.'
Password: '.$pwd.'

  
Please click this link to activate your account:
http://www.traversa.000webhost.com/verify.php?email='.$email.'&hash='.$hash.' "; 
                      
$headers = 'From:noreply@traversa.000webhost.com' . "\r\n"; 
mail($to, $subject, $message, $headers); 
?>
