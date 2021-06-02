<?php
session_start();
$login = $_SESSION['Login'];
// unset($_SESSION['Login']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Worker Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">PORTAL</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="worker.php">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
      <li><a href="index.php">Log out</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Welcome to your worker portal <?php echo $login;?></h3>
</div>

</body>
</html>
