<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    if (isset ($_SESSION["username"])) {
        echo "logged in as: " . $_SESSION["username"];
        echo "<br>
        <a href='./report.php'>Report a problem</a>";
        echo "<br>
        <a href='./logout.php'>Log out</a>";
        echo "<br>
        <a href='./ticketStatus.php'>Your Tickets</a>";
        
        if ($_SESSION["security"] == "admin" || $_SESSION["security"] == "god") {
            echo "<br>
            <br>
            <br>
            <br>";
            echo "<a href='./ticketmanager.php'>Untouched tickets</a>";
            echo "<br>";
            echo "<a href='./claimedTickets.php'>Claimed tickets</a>";
        }
        if ($_SESSION["security"] == "god"){
            echo " <br>
            <br>
            <a href='./accessLvls.php'>Manage access levels</a>";
            echo " <br>
            <a href='./allTickets.php'>All Tickets</a>";
            
        }
    } else {
        echo $_SESSION["username"];
        echo "<a href='inlogging.php'>Log iN</a>";
    }
    ?>

</body>

</html>