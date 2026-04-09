<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    $a=65;
    $b=34;
    //Arithmatic operators
    //Add
    echo "The addition is: ". $a+$b." <br>";
    //Sub
    echo"The subtraction is: ". $a-$b."<br>";
    //multiply
    echo "The multiplication is: ".$a*$b. "<br>";
    //division
    echo "The division is: ".$a/$b."<br>";
    //Modulus
    echo "The modulus of numbers is: ".$a%$b."<br>";
    //exponention
    echo "The exponentiation: ".$a**$b."<br>";

    //Assignment operator
    $x=$b;
    echo "The value of x is: ".$x."<br>";
    //Add and assign
    $x+=5;
    echo "The value of x is: ".$x."<br>";
    //Sub and assign
    $x-=6;
    echo "The value of x is: ".$x."<br>";
    //Multiply and assign
    $x*=2;
    echo "The value of x is: ".$x."<br>";
    //Divide and assign
    $x/=3;
    echo "The value of x is: ".$x."<br>";
    //Modulus and assign
    $x%=5;
    echo "The value of x is: ".$x."<br>";
    
    //Comparision operator
    var_dump( $x==$a);
     echo"<br>";
    var_dump($x!=$b);
    echo "<br>";
    var_dump($a!==$b);
    echo "<br>";
    var_dump($a<$b);
    echo"<br>";
    var_dump($a>$b);
    echo"<br>";
    $d=65;
    var_dump($a<=$d);
    echo"<br>";
    var_dump($d>=$a);
    echo"<br>";
    var_dump($a<>$d);
    echo"<br>";

    //logical operator
    $e=100;
    $f=250;
    //And operator
    if($e==100 and $f==300){
        echo "hello";
    }else{
        echo"wrong";
    }
    echo"<br>";
    //or operator
    if($e==20 or $f==250){
        echo"OR is right";
    }else{echo"OR is wrong";}
    echo"<br>";
    //xor operator
    if($e==100 xor $f=250){
        echo"Xor operator true";
    }else{echo"Xor operator is false";}
    echo"<br>";
    //&& operator
    if($e==100&&$f==250){
        echo"&& is True";
    }else{echo"&& is false";}
    echo"<br>";
    // ||operator
    if($e==100 || $f==250){
        echo"|| is true";
    }else{
        echo"|| is false";
    }
    echo"<br>";
    // String operator
    $txt1= "String";
    $txt2= "operator";
    $txt1.=$txt2;
    echo $txt1;
    

    ?>
    
    
</body>
</html>