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
    $ticketNumber = $_GET["number"];
    $adminName = $_SESSION["username"];
    $query = "DELETE FROM tickets WHERE saksnummer = $ticketNumber;";
    $conn->query($query);
    header("Location: ../client/ticketmanager.php");
    ?>
</body>
</html>