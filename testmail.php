<?php
$to = "ajmi.s@poornam.com";
$subject = "Test mail";
$message = "Hello! This is a test email messageewrwerwe.";
$from = "ajmi.s@poornam.com";
$headers = "From:" . $from;

$r = mail($to,$subject,$message,$headers);
var_dump($r);
?>

