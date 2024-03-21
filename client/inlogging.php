<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="../componenter/login.php">
        Name: <input type="text" class="loginInput" name="username" id="username" required>
        Email: <input type="text" class="loginInput" name="email" id="email" required>
        Password: <input type="password" name="password" class="loginInput" required>
        <input type="submit" value="Login" required>
        <br>
        <a href="./nybruker.php">New Here? Sign UP</a>
    </form>
</body>
</html>