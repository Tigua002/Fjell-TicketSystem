<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="./index.php"><- Back</a>
    <?php
        require "../databConnect.php";

        $username = $_SESSION["username"];
        $query = "SELECT * FROM tickets WHERE client = '$username';";
        $tickets = $conn->query($query);

        while ($row = mysqli_fetch_assoc($tickets)) {
            $problem = $row["saksBeskrivelse"];
            $client = $row["ansvarlig"];
            $date = $row["saksDATO"];
            $status = $row["status"];
            $saksnummer = $row["saksnummer"];
            echo "
            <div class='sakHolder'> 
                <div class='sak'>
                <h1 class='saksnummer'>TicketNumber: $saksnummer</h1>
                <h1 class='client'>Responsible: $client</h1>
                <h1 class='client'>Status: $status</h1>
                <h1 class='dato'>$date</h1>
                </div>
                <div class='problemHolder'>
                    <h1 class='problem'>$problem</h1>
                </div>
            </div>
            ";
    
        }
    ?>
</body>
</html>