<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
 <pre>
        Mobile Number<input type="tel" name="number">
        Password<input type="password" name="password">
        <input type="submit">
</pre>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];
            $password = $_POST["password"];
    
            echo "Submitted Data: <br>";
            echo "Mobile Number: " . $number . "<br>";
            echo "Password: " . $password;
        }
    ?>
</body>
</html>