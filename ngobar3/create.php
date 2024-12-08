<?php
include("connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $statement = $connection->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    
    $statement->bind_param("ss", $username, $password);

    if($statement->execute()){
        echo"berhasil insert cuy";
    }
    else{
        echo"saya kecewa pada kamu";
    }

    $statement->close();
    $connection->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="submit">
    </form>
    <a href="read.php">balik</a>
</body>
</html>