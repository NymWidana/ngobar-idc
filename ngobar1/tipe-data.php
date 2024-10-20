<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Belajar Tipe Data</h1>

    <?php
    echo"<br><h2>1. Tipe Data Integer</h2>";
    // inisiasi dan inisialisasi variabel
    $a = 10;
    $b = 5;
    $c = $a + 5;
    $d = $b + (10*5);
    $e = $d - $c;

    // Tampilan data dengan perintah echo
    echo"Variabel $a <br>";
    echo"Variabel a: $a <br>";
    echo"Variabel b: {$b} <br>";
    echo"Variabel c: {$c} <br>";
    echo"Variabel d: {$d} <br>";
    echo"Variabel e: {$e} <br>";
    
    // mengetahui tipe data dari variabel
    var_dump($e)
    ?>

    <?php
    
    
    ?>

</body>
</html>