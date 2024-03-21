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
    $state = $_GET["state"];
    if ($state == "resolved") {
        $query = "UPDATE tickets SET status='$state'  WHERE saksnummer = $ticketNumber";
    }
    else{
        $query = "UPDATE tickets SET status='$state', ansvarlig='NONE'  WHERE saksnummer = $ticketNumber";
    }
    $conn-> query($query);
    header("Location: ../client/claimedTickets.php");
    ?>
</body>
</html>