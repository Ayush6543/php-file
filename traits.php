<?php

trait Test{
    public function fun1(){
        echo "fun1";
    }

    public function fun2(){
        echo "fun2";
    }

    public function fun3(){
        echo "fun3";
    }
}
 class Welcome1{
    use Test;
 }

 class Welcome2{
    use Test;
 }

$obj=new Welcome1();
 $obj->fun1();
 echo "<br>";

 $obj2=new Welcome2();
 $obj2->fun1();
 $obj2->fun2();
 $obj->fun3();



?>