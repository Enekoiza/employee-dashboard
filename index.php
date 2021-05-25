<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login Page</title>
    </head>
    <body>

<?php
    if(isset($_SESSION["LoginIncorrect"]) && $_SESSION["LoginIncorrect"] == 1)
    {
        echo 'These credentials do not exist.';
        $_SESSION['LoginIncorrect'] = 0;
    }
    else if(isset($_SESSION["LoginIncorrect"]) && $_SESSION["LoginIncorrect"] == 2)
    {
        echo 'The login or/and the password are incorrect.';
        $_SESSION['LoginIncorrect'] = 0;
    }



?>

        <form method="post" action="welcome.php" >
            <label for="fname">Login:</label><br>
            <input type="text" id="login" name="login" required><br>
            <label for="lname">Password:</label><br>
            <input type="password" name="password" id="password"><br>
            <button type="submit">Log in</button>
        </form>

    </body>
</html>


