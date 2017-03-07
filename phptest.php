<?php
    function mail() {
    $emailTo="robertjmiki@gmail.com";
    $subject="Testing php email function";
    $body="test email";
    $headers="From: rmiki@gmail.com";
    
   echo(mail($emailTo, $subject, $body, $headers));
    }
?>