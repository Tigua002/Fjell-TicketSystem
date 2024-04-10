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
    $ticketStatus = $_GET["ticketStatus"];
    $username = $_SESSION["username"];
    if ($ticketStatus == "untouched"){
        $query = "UPDATE tickets SET status = '$ticketStatus', ansvarlig = 'NONE' WHERE saksnummer = '$ticketNumber'";
    } else {
        $query = "UPDATE tickets SET status = '$ticketStatus', ansvarlig = '$username' WHERE saksnummer = '$ticketNumber'";

    }
    echo $query;
    $conn->query($query);
    header("Location: ../client/allTickets.php");
    ?>
</body>
</html>