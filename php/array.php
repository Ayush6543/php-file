<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // indexed array
    $arr1=array("Car1","car2","car3","car4");
    echo "<pre>";
    print_r($arr1);
    echo "</pre>";
    echo $arr1[0];
    echo "<br>";

    //associative array
    $arr2=array(
        'Name'=>'Thar',
        'Company'=>'Mahindra',
        'Year'=>2026,
        'Number'=>1,


    );
    $arr2['Status']="pruchased";
    echo "<pre>";
    print_r($arr2);
    echo "</pre>"; 

    // Multi dimensional array
    $arr3=array(
        'Name'=>'xuv',
        'Company'=>array('mahindra','suzuki','tata'),
        'Year'=>2026,
       
    );
    echo"<pre>";
    print_r($arr3);
    echo"</pre>";
     ?>
</body>
</html>