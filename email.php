<?php
//get data from form  
$name = $_POST['fullname'];
$email= $_POST['email'];
$subject = $_POST['subject'];
$message= $_POST['message'];
$to = "oussama.zbair9@gmail.com";
$subject = "Mail From my website CV (oussama-zbair.me) ";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
if($email !=NULL ){
    mail($to,$subject,$txt);
}
//redirect
header("Location:thankYou.html");
?>