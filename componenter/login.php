<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require "../databConnect.php";
    $userInput = $_GET["username"];
    $emailInput = $_GET["email"];
    $passInput = $_GET["password"];
    $query = "SELECT * FROM users WHERE username = '$userInput' AND password='$passInput' AND email = '$emailInput';";
    $users = $conn->query($query);
    

    if ($users->num_rows == 0) {
        echo "<a href='../client/inlogging.php'>login failed try again</a>";
    }
    while ($row = mysqli_fetch_assoc($users)) {
        echo $row["username"];
        echo "<br>";
        echo $row["password"];
        $_SESSION["username"] = $row["username"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["security"] = $row["accessLvl"];
        header("Location: ../client/index.php");
        exit;
    }
    echo "<br>";
    ?>
</body>
</html>