<?php

interface Class1{

    public function test1();
}

interface Class2{
    public function test2();
}



class Class3 implements Class1,Class2{
    public function test1(){
        echo "test1";
    }
    public function test2(){
        echo "test2";
    }
}
$obj=new Class3();
echo $obj->test1();


?>