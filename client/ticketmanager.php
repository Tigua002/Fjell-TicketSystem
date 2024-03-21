<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href="./index.php">Back</a>
    <br>
    <?php
    require "../databConnect.php";
    if ($_SESSION["security"] !== "admin" && $_SESSION["security"] !== "god") {
        header("Location: ./index.php");
    }
    $query = "SELECT * FROM tickets WHERE status = 'untouched' AND ansvarlig = 'NONE';";
    $tickets = $conn->query($query);
    while ($row = mysqli_fetch_assoc($tickets)) {
        $problem = $row["saksBeskrivelse"];
        $client = $row["client"];
        $date = $row["saksDATO"];
        $saksnummer = $row["saksnummer"];
        echo "
        <div class='sakHolder'> 
            <div class='sak'>
            <h1 class='saksnummer'>TicketNumber: $saksnummer</h1>
            <h1 class='client'>Client: $client</h1>
            <h1 class='dato'>$date</h1>
            </div>
            <div class='problemHolder'>
                <h1 class='problem'>$problem</h1>
            </div>
            <div class='problemHolder'>
                <h1 onclick='claimTicket($saksnummer)' class='claimTicket'>Claim Ticket</h1>
            </div>
        </div>
        ";

    }
    ?>

    <form action="../componenter/claimTicket.php" class='hiddenForm'>
        <input type="text" id="ticketNumber" name="number">
        <input type="submit" id="hiddenSubmit">
    </form>
    <script>
        function claimTicket(saksnummer) {
            document.getElementById("ticketNumber").value = saksnummer
            document.getElementById("hiddenSubmit").click()
        }
    </script>
</body>

</html>