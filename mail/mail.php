<?php

$to="ayuprak31@gmail.com";
$subject="Test";
$message="Test";
$header="From: prakashayush88@gmail.com";

if(mail($to,$subject,$message,$header)){
    echo "email sent";
}
else{
    echo "email not send";
}



?>