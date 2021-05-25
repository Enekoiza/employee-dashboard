<?php

session_start();

require 'config.php';

$login = $_POST['login'];
$pass = $_POST['password'];

$sqlstatement = 'SELECT * FROM EMPLOYEE WHERE Login = :x';

$sth = $conn->prepare($sqlstatement);
$sth->bindParam(':x', $login, PDO::PARAM_STR);
$sth->execute();
$result = $sth->fetch();
$loginDetected = $sth->rowcount();

if($loginDetected != 1)
{
    $_SESSION["LoginIncorrect"] = 1;
    header('Location:index.php');
}
else if(($result['Password'] != $pass) || ($result['Login'] != $login))
{
    $_SESSION["LoginIncorrect"] = 2;
    header('Location:index.php');
}

if($result['isSupervisor'] == 1)
{
    header( "refresh:5;url=supervisor.php" );
}
else if($result['isWorker'] == 1)
{
    header( "refresh:5;url=worker.php" );
}
else if($result['isManager'] == 1)
{
    header( "refresh:5;url=manager.php" );
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Welcome Page</title>
    </head>
    <body>
<h1>WELCOME <?php echo $login; ?></h1>

<p>You will be redirected to your portal in 5 seconds.</p>
        
    </body>
</html>