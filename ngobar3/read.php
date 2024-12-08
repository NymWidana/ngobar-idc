<?php
include("connect.php");

    $statement = $connection->prepare("SELECT * FROM users");
$statement->execute();

 $hasilStmt = $statement->get_result();
 $hasilFetch = $hasilStmt->fetch_all(MYSQLI_ASSOC);

    if($hasilStmt){
        echo"berhasil ambil data";
    }
    else{
        echo"saya kecewa pada kamu";
    }

    $statement->close();
    $connection->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
</head>
<body>
    <br>
    <a href="create.php">tambahkan</a>
<table style="border:1px solid black">
    <tr>
        <th>id</th>
        <th>nama</th>
        <th>password</th>
        <th>aksi</th>
    </tr>
    <?php
    foreach ( $hasilFetch as $data ):?>
    <tr>
                <td>
                    <?php echo"{$data["id"]}" ?>
                </td>
                <td>
                    <?php echo"{$data["username"]}" ?>
                </td>
                <td>
                    <?php echo"{$data["password"]}" ?>
                </td>
                <td>
                    <a href="update.php?id=<?php echo($data["id"])?>">update</a>
                    <a href="delete.php?id=<?php echo($data["id"])?>">delete</a>
                </td>
   </tr>
    <?php endforeach;?>
    </table>
</body>
</html>