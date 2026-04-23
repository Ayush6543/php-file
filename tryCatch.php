<?php

function division($n){
    try{

    if($n==0){
    throw new Exception("<br>Enter the valid number.");
}
$div=2/$n;
echo "<br>".$div;

}
catch(Exception $e){
    echo $e->getFile();
}finally{
    echo "<br> Finally";
}
}
division(2);
division(0);
division(4);

?>