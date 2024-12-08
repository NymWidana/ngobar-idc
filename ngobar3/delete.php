<?php
include("connect.php");

    $id = $_GET["id"];

    $statement = $connection->prepare("DELETE FROM users where id=?");
    
    $statement->bind_param("i", $id);

    if($statement->execute()){
        echo"berhasil delete data";
        return header("Location: read.php");
    }
    else{
        echo"saya kecewa pada kamu";
        return header("Location: read.php");
    }
    $statement->close();
    $connection->close();
