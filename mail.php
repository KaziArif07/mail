<?php

$to = "sababarif@gmail.com";
$subject = "Response from website";
$message = "I am very thankfull to you";
$headers = "From: sababarif47@gmail.com";

if (mail($to, $subject, $message, $headers))
    {
        echo "Mail send Successfully";
    }

    else {
        echo "Can not send mail";
    }

?>