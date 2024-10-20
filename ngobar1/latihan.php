<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

// latihan 1
echo"Latihan 1 <br>";
$x = 5;
$y = 6;
$z = $x + $y;
echo "5 + 6 = ".$z."<br>";
$z = $x - $y;
echo "5 - 6 = ".$z."<br>";
$z = $x * $y;
echo "5 * 6 = ".$z."<br>";
$z = $x / $y;
echo "5 / 6 = ".$z."<br>"."<br>";

// latihan 2
echo"Latihan 2"."<br>";
$sisi = 64;
$luasPersegi = $sisi**2;
echo "luas persegi dengan sisi 64 adalah = ".$luasPersegi."<br>"."<br>";

// latihan 3
echo"Latihan 3"."<br>";
$panjang = 34;
$lebar = 23;
$luasPersegiPanjang = $panjang*$lebar;
echo "luas persegi panjang dengan panjang 34 dan lebar 23 adalah = ".$luasPersegiPanjang."<br>"."<br>";

// latihan 4
echo"Latihan 4"."<br>";
$kelilingPersegiPanjang = 2*($panjang + $lebar);
echo "keliling persegi panjang latihan 3 adalah = ".$kelilingPersegiPanjang."<br>"."<br>";

?>
</body>
</html>