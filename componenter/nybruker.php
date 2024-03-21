<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../client/nybruker.php">
        <input id="error" type="text" name="error">
        <input type="submit" id="submit">
    </form>

    <?php
    require "../databConnect.php";
    $username = $_GET["username"];
    $password = $_GET["password"];
    $email = $_GET["email"];
    $users = $conn->query("SELECT * FROM users");

    while ($row = mysqli_fetch_assoc($users)) {

        if ($row["username"] == $username) {
            echo '<script>';
            echo 'document.getElementById("error").value = "Your username seems to be clashing with someone elses";';
            echo 'document.getElementById("submit").click();';
            echo '</script>';
        } else if ($row['email'] == $email) {
            echo '<script>';
            echo 'document.getElementById("error").value = "Your email seems to be clashing with someone elses";';
            echo 'document.getElementById("submit").click();';
            echo '</script>';
        }
    }
    $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email');";
    $conn->query($query);
    $_SESSION["username"] = $username;
    $_SESSION["email"] = $email;
    $_SESSION["security"] = "user";
    header("Location: ../client/index.php");
    exit;
    ?>

</body>

</html>