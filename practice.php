<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Class1{
        public $num;
        function __construct()
        {
        
            $this->num=21;
           // echo "construct";    
        }

        function fun1(){
            echo "fun1";
        }
    }

    class Class2 extends Class1{
        function __construct(){
            echo "construct2";
            parent::__construct();
            $this->num=1;

        }
        function fun1(){
            echo "fun2";
        }
    }
    $obj=new class2();
    echo $obj->num;
    
    
    
    
    
    
    
    ?>
</body>
</html>