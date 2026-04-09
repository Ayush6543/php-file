<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <form action="" method="POST">
        Username<input type="text" name="username">
        Mobile number<input type="tel" name="mobile">
        Password<input type="password" name="password">
        <input type="submit">
</pre>
    </form>
    <?php
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $mobile=$_POST["mobile"];
    $mobile=trim($mobile);
    $length=strlen($mobile);

   if( $length==10 and is_numeric($mobile) and $mobile[0]>=6 ){;
        echo "valid number: " .$mobile. "<br>";
    }
    else{
        echo "Invalid number <br>";
    }
   
    echo "Username: ". $username. "<br>";
    echo "Password: ". $password. "<br>";
   
}
    
    
    
    ?>
</body>
</html>