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
        unset($_SESSION['LoginIncorrect']);
    }
    else if(isset($_SESSION["LoginIncorrect"]) && $_SESSION["LoginIncorrect"] == 2)
    {
        echo 'The login or/and the password are incorrect.';
        unset($_SESSION['LoginIncorrect']);
    }
    session_destroy();
?>

        <form method="post" action="welcome.php" >
            <label for="fname">Login:</label><br>
            <!-- No autocomplete from previous logins -->
            <input type="text" id="login" name="login" autocomplete="off" autofocus required><br> 
            <label for="lname">Password:</label><br>
            <input type="password" name="password" id="password"><br>
            <button type="submit">Log in</button>
        </form>

    </body>
</html>


