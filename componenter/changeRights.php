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
    $rights = $_GET["rights"];
    $userID = $_GET["userID"];
    echo $rights . $userID;
    $query = "UPDATE users SET accessLvl = '$rights' WHERE userID = $userID";
    $conn->query($query);
    header("Location: ../client/index.php");
    ?>
</body>

</html>