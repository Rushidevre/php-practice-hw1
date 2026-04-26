<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="">
    Username: <input type="text" name="name"><br>
    Password: <input type="password" name="pass"><br>

    Agree to Terms and Conditions:
    <input type="checkbox" name="agree" value="yes"><br>

    <input type="submit" value="Login">
</form>
</body>
</html>
<?php
$name = $_GET['name'];
$pass = $_GET['pass'];
$agree =isset($_GET["agree"])?"agreed":"not agreed";
echo "Welcome, " . $name .  " and you have " . $agree . " to the terms.";
?>