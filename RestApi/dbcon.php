<?php
$servername="localhost";
$username="root";
$password="";
$database="Rest";
$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("error: connection failed");
}



?>