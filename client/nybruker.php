<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        if (isset($_GET["error"])) {
            echo  $_GET["error"];
        }
    ?>
    <form action="../componenter/nybruker.php">
        Name: <input type="text" class="loginInput" name="username" id="username" required>
        Password: <input type="password" name="password" class="loginInput" required>
        Email: <input type="email" name="email" required>

        <input type="submit" value="Sign UP">

    </form>
</body>
</html>