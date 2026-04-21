<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
    header("location: login.php");
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My Website</a>
    
    <div class="d-flex">
      <span class="navbar-text me-3">
        Welcome, <?php echo $_SESSION['username']; ?>
      </span>
      <a href="#" class="btn btn-danger">Logout</a>
    </div>
  </div>
</nav>

<div class="container mt-4">
  <div class="alert alert-success">
    <h4 class="alert-heading">Welcome!</h4>
    <p>You are logged in successfully.</p>
  </div>
</div>

</body>
</html>