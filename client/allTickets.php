<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require "../databConnect.php";

    $result = $conn->query("SELECT * FROM tickets");
    if ($_SESSION["security"] !== "admin" && $_SESSION["security"] !== "god") {
        header("Location: ./index.php");
    }

    echo"<a href='index.php'> <-back</a>";
    while ($row = mysqli_fetch_assoc($result)) {
        $status = $row["status"];
        $client = $row["client"];
        $saksnummer = $row["saksnummer"];
        $saksBeskrivelse = $row["saksBeskrivelse"];
        $ansvarlig = $row["ansvarlig"];
        $date = $row["saksDATO"];
        echo "
        <div class='sakHolder'> 
            <div class='sak'>
            <h1 class='saksnummer'>TicketNumber: $saksnummer</h1>
            <h1 class='client'>Responsible: $ansvarlig</h1>
            <h1 class='client'>Status: $status</h1>
            <h1 class='dato'>Submittet: $date</h1>
            </div>
            <div class='problemHolder'>
                <h1 class='problem'>$client: $saksBeskrivelse</h1>
            </div>
        </div>
        ";
    }
    ?>
</body>
</html>