<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="linksHolder">
        <?php
        session_start();
        if (isset ($_SESSION["username"])) {
            echo "logged in as: " . $_SESSION["username"];
            echo "
            <div class='links'>
                <a class='indexLink' href='./logout.php'>Log out</a>
                <a class='indexLink' href='./report.php'>Report a problem</a>
                <a class='indexLink' href='./ticketStatus.php'>Your Tickets</a>
            </div>";
            if ($_SESSION["security"] == "admin" || $_SESSION["security"] == "god") {
                echo "
                <div  class='links'>
                    <a class='indexLink' href='./ticketmanager.php'>Untouched tickets</a>
                    <a class='indexLink' href='./claimedTickets.php'>Claimed tickets</a>
                </div>
            ";
            }
            if ($_SESSION["security"] == "god") {
                echo " 
                <div  class='links'>
                    <a class='indexLink' href='./accessLvls.php'>Manage access levels</a>
                    <a class='indexLink' href='./allTickets.php'>All Tickets</a>
                </div>";

            }
        } else {
            echo $_SESSION["username"];
            echo "<a class='indexLink' href='inlogging.php'>Log iN</a>";
        }
        ?>
    </div>
</body>

</html>