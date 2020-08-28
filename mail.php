<?php
//the subject
$sub = "Your subject";
//recipient email here
$rec = "jm.kagaya25@gmail.com";               // Change the recipient email here 
$message = "<b>This is HTML message.</b>";
$message .= "<h1>This is headline.</h1>";
$header = "From:jm.kagaya2014@gmail.com \r\n"; // change the From: Email 
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";
//send email
mail ($rec,$sub,$message,$header);

//https://myaccount.google.com/lesssecureapps
?>