<?php

class Goodbye{
    const Message="Welome to my page";
    public function bye(){
       echo self::Message;
    }
}

$goodbye=new Goodbye();
$goodbye->bye();

//echo Goodbye::Message;





?>