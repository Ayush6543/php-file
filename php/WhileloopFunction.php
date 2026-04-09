<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function greet() {
    $i=0;
    while($i<10){
    echo "Hello User $i <br>";
    echo "<br>";
    $i++;
    }

}

greet();
greet();
greet();


?>
</body>
</html>