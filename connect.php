<?php 
 $to      = 'oussama.zbair9@gmail.com';
 $subject = "New Message From Your CV Website";
 $message = $_POST['message'];
 $headers = 'From: ' . $_POST['fullname'] . ' His email address:'. $_POST['email'].'Subject:'.$_POST['subject']."\r\n" .
     'X-Mailer: PHP/' . phpversion();
 
 mail($to, $subject, $message, $headers);
 
 header('Location: t.html');
 exit();
?>