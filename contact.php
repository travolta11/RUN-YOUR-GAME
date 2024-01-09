<?php
if (isset($_post['send'])){
$name = $_post['name'];
$mailfrom = $_post['mail'];  
$number = $_post['number'];
 
$message = $_post['message'];  
$mailto="liqaliissam1@gmail.com"  
$headers="from:run-your-game"  
  
  
  mail($mailto ,$mail ,$number , $message , headers);
  header("location: Contact.html?mailsend");
}