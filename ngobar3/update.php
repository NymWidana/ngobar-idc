<?php
include("connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_GET["id"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $statement = $connection->prepare("UPDATE users SET username = ?, password = ? where id = ?");
    
    $statement->bind_param("ssi", $username, $password, $id);

    if($statement->execute()){
        echo"berhasil update cuy";
        return header("Location: read.php");
    }
    else{
        echo"saya kecewa pada kamu";
    }
    $statement->close();
    $connection->close();
}
else{
    $id = $_GET["id"];

    $statement = $connection->prepare("SELECT * FROM users WHERE id = ?");
    
    $statement->bind_param("i", $id);

    $statement->execute();
    $hasil = $statement->get_result();
    $hasilFetch = $hasil->fetch_assoc();

    $username = $hasilFetch["username"];
    $password = $hasilFetch["password"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php $_GET['id']?>" placeholder="id">
        <input type="text" name="username" value="<?php echo($username)?>" placeholder="username">
        <input type="password" name="password" value="<?php echo($password)?>" placeholder="password">
        <input type="submit">
    </form>
</body>
</html>