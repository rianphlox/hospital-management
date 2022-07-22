<?php
    require $_SERVER['DOCUMENT_ROOT'] . "/hospital/config/DB.php";
    $db = new DB();
    
    $sql = "INSERT INTO labour (cord_clamp_time) values () WHERE id = 1";
    if (isset($_POST['submit'])) {
        $time = $_POST['time'];
        $db->conn->query($sql);
    }
    header('location: get')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="test">
        <input type="time" name="time" id="time">
        <button name="submit" type="submit">Submit</button>
    </form>
</body>
</html>