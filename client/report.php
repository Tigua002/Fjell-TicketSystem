<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset ($_GET["error"])) {
        echo $_GET["error"];
    }
    ?>
    <form action="../componenter/report.php" class="reportForm">
        <input type="text" placeholder="Name" name="name" required>
        <input type="email" placeholder="email" name="email" required>
        <textarea type="text" placeholder="Describe your problem" rows="5" columns="20" name="problem"
            required></textarea>
            <select name="topic">
                <option value="other">Other</option>
                <option value="billing">Billing</option>
                <option value="new">New Equpment</option>
                <option value="repairs">Repairs</option>
            </select required>
        <a href="./index.php">Return</a>
        <input type="submit" value="submit problem">
    </form>
</body>

</html>