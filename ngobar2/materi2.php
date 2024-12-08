<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF IF ELSE</title>
    <style>
        .list {
            display: flex;
            gap: 2em;
            list-style-type: none ;
        }
        .list li {
            font-size: 1em;
            background : #000;
            color : #fff;
            padding: 0.5em 1em;
            transition: 0.5s ease;
            border-radius: 1em;
        }
        .list li:hover{
            background: #0000FF;
        }
    </style>
</head>
<body>
    <ul class="list">
    <?php
    $listMaba = ["widana", "ningrat","deva"];   
    foreach($listMaba as $Maba){?>
         <li><?php echo $Maba?></li> <?php
    }
    ?>
    </ul>
    <ul class="list">
    <?php
    $listMaba = ["widana", "ningrat","deva"];
    $i = 0;
    while($i < count($listMaba)){?>
         <li><?php echo $listMaba[$i]?></li> 
    <?php
    $i++;
    }
    ?>
    </ul>
    <ul class="list">
    <?php
    $listMaba = [
        [
            "nama"=>"widana",
            "asal"=>"mengwi",
            "kampus"=>"instiki",
            "jurusan"=>"ti-mdi",
            "imgLink"=>"ningrat.jpg"
        ],
        [
            "nama"=>"ningrat",
            "asal"=>"tunjuk",
            "kampus"=>"instiki",
            "jurusan"=>"ti-mdi",
            "imgLink"=>"ningrat.jpg"
        ],
        [
            "nama"=>"deva",
            "asal"=>"instiki",
            "kampus"=>"instiki",
            "jurusan"=>"ti-mdi",
            "imgLink"=>"ningrat.jpg"
        ],
    ];   
    foreach($listMaba as $Maba):?>
         <li>
            <h3><?php echo $Maba["nama"]?></h3>
            <img width="300" src="img/<?php echo $Maba["imgLink"]?>" alt="gambar">
            <ul>
                <li>asal: <?php echo $Maba["asal"]?></li>
                <li>kampus: <?php echo $Maba["kampus"]?></li>
                <li>jurusan: <?php echo $Maba["jurusan"]?></li>
            </ul>
        </li> 
    <?php
    endforeach;
    ?>
    </ul>
</body>
</html>

