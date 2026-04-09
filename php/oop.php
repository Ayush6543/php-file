<?php

class Calculation{
    public $a,$b,$c;
    function sum(){
        $this->c=$this->b+$this->a;
        return $this->c;
    }
    function sub(){
        $this->c=$this->b-$this->a;
        return $this->c;
    }

}
    $c1=new Calculation();
    $c1->a=10;
    $c1->b=20;
    echo $c1->sum();
    echo"<br>".$c1->sub();



?>