<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Strlen() function
    $a="hello, how can i help you?";
    echo "Total no. of words of value in 'a' is: ". strlen($a)."<br>";
    // Str_word_count()
    echo "Word count of value in 'a' is: ".str_word_count($a)."<br>";
    // strtoupper() 
    echo"uppercase of 'a' value: ".strtoupper($a)."<br>";
    // Strtolower()
    echo "lowercase of 'a' value: ".strtolower($a)."<br>";
    // Str_replace()
    echo str_replace("hello","Good evening",$a)."<br>";
    // strrev()
    echo strrev($a)."<br>";
    // trim()
    $b="   reverse!";
    echo "<input value='" . $b . "'>";
    echo "<br>";
    echo "<input value='" . trim($b) . "'>";
    echo"<br>";
    // explode()
    $c=explode(" ",$a);
    print_r($c);
    echo"<br>";
    // implode()
    $d= implode(" ",$c);
    print_r($d);
    echo "<br>";
    // substr()
    echo substr($a,6,5);
    //
?>
</body>
</html>