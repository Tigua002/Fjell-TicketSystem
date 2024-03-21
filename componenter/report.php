<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../client/report.php">
        <input id="error" type="text" name="error">
        <input type="submit" id="submit">
    </form>
    <?php
    require "../databConnect.php";
    $mailInput = $_GET["email"];
    $nameInput = $_GET["name"];
    $problem = $_GET["problem"];
    $topic = $_GET["topic"];
    if ($_SESSION["username"] !== $nameInput) {
        echo '<script>';
        echo 'document.getElementById("error").value = "That is not your username";';
        echo 'document.getElementById("submit").click();';
        echo '</script>';
        exit;
    } else if ($_SESSION["email"] !== $mailInput) {
        echo '<script>';
        echo 'document.getElementById("error").value = "That is not your email";';
        echo 'document.getElementById("submit").click();';
        echo '</script>';
        exit;
    }
    $query = "INSERT INTO tickets (saksBeskrivelse, client, clientmail, category) VALUES ('$problem', '$nameInput', '$mailInput', '$topic');";
    echo $query;
    $conn->query($query);
    header("Location: ../client/index.php"); 
    ?>
</body>

</html>