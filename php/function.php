<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    function greet() {
        echo "Hello User <br>";
    }
    
    greet();
    greet();
    greet();*/
    
    function Marks($MarksArr){
        $sum=0;
        foreach($MarksArr as $value){
            $sum+=$value;
        }
        return $sum;
    }

    function Average($MarksArr){
        $sum=0;
        $i=1;
        foreach($MarksArr as $value){
            $sum+=$value;
            $i++;
        }
        return $sum/$i;
    }





    $Rohit=[80,77,68,49,88,85];
    $SumMarks=Marks($Rohit);
    $Average=Average($Rohit);


    $Aman=[98,97,92,88,87,75];
    $SumMarksAman=Marks($Aman);
    $AverageAman=Average($Aman);
    echo "Total marks of Rohit is $SumMarks <br>";
    echo "Average marks of rohit is $Average<br>";

    echo "Total marks of Aman is $SumMarksAman <br>";
    echo "Average marks of Aman is $AverageAman <br>";  
    
    ?>
</body>
</html>