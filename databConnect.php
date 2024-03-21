<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "admin";

    // Create connection
    $conn = new mysqli($servername, $username, $password, "FjellTickets");

    // Check connection
    if ($conn->connect_error) {
        die ("Connection failed: " . $conn->connect_error);
    }
    session_start();
    // 
    ?>

</body>

</html>
<?php

?>