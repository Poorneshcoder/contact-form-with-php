<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$message= $_POST['message'];

$to = "eswar.chinni354@gmail.com";
$subject = "Mail From Fore Edge ";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Mobile Number = " . $mobile . "\r\n Message =" . $message;
$headers = "From: support@foreedge.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>