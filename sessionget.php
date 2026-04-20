<?php
session_start();
echo "your favorite color: ".$_SESSION["favcolor"]."<br>";
echo "you selected your favorite animal: ".$_SESSION["favanimal"];



?>