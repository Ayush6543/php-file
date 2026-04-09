<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    First name<input type ="text" name="fname" ><br>
    Last name<input type="text" name="lname" ><br>
    <input type="submit">

</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $FirstName = trim($_POST["fname"]);
    $LastName = trim($_POST["lname"]);
    if (empty($FirstName)) {
        echo "<p style='color:red;'>First name is required</p>";
    }
    if (empty($LastName)) {
        echo "<p style='color:red;'>Last name is required</p>";
    }
    if (!empty($FirstName) && !empty($LastName)) {
        echo "Welcome, " . htmlspecialchars($FirstName) . " " . htmlspecialchars($LastName);
    }
}








?>
</body>
</html>