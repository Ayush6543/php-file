<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=30;
    var_dump(filter_var($a,FILTER_VALIDATE_INT));
    $options=array(
        "options"=>array(
            "min_range"=>20,
            "max_range"=>30

        )
    );
    if(filter_var($a,FILTER_VALIDATE_INT,$options) ){
        echo "<br> $a is an integer ";
    }
    else{
        echo "<br>$a is not an integer";
    }
    
    
    
    
    ?>
</body>
</html>