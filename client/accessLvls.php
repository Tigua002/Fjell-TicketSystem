<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href="./index.php">Back to index</a>
    <?php
    require "../databConnect.php";
    $query = "SELECT * FROM users";
    $users = $conn->query($query);

    if ($_SESSION["security"] !== "god") {
        header("Location: ./index.php");
        exit();
    }
    while ($row = mysqli_fetch_assoc($users)) {
        $userID = $row["userID"];
        $username = $row["username"];
        $accessLvl = $row["accessLvl"];
        if ($userID !== "1"){
            echo "
            <form action='../componenter/changeRights.php' class='sakHolder'> 
                <input class='saksnummer' name='userID' value='$userID' readonly>
                <h1 class='client'>Username: $username</h1>
                <h1 class='client'>Rights: $accessLvl</h1>
                <div class='rightsDiv' >
                    <h1>Change Rights To</h1>
                    <select name='rights'>
                        <option value='admin'>Admin</option>
                        <option value='user'>User</option>
                    </select>
                    <input type='submit' class='applyRightsBtn'>
                </div>
            </form>
            ";
        }
    }

    ?>
</body>

</html>