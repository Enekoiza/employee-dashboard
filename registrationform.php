<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registration form</title>
    </head>
    <body>
        <form method="post" action="index.php" >
            <label for="fname">First Name:</label><br>
            <input type="text" id="fname" name="login" autocomplete="off" autofocus required><br> 
            <label for="lname">Second Name:</label><br>
            <input type="text" name="lastname" id="lastname" required><br>
            <label for="DoB">Date of Birth:</label><br>
            <input type="date" id="DoB" name="DoB"><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="phoneNo">Phone number:</label><br>
            <input type="text" id="phoneNo" name="phoneNo" pattern="/ \d+ /" title="Only numbers"><br>
            <label for="address">Address:</label><br>
            <input type="text" id="address" name="address" required><br>
            <label for="city">City:</label><br>
            <input type="text" id="city" name="city" required><br>
            <label for="postcode">Postcode:</label><br>
            <input type="text" id="postcode" name="postcode" required><br>
            <button type="submit">Register</button>
        </form>
        <script>
            DoB.max = new Date().toISOString().split("T")[0];
        </script>
    </body>
</html>