<?php

$title = "Postani programer";
$navLinks = [
    ["Glavna" => "Glavna"],
    ["O Nama" => "O Nama"],
    ["Kontakt" => "Kontakt"]
];
$date = date("Y");
$copyright = "Copyright © mojsajt $date";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <h1><?= $title?></h1>
    <nav>
      <a href="#"><?= $navLinks[0]["Glavna"] ?></a>   
      <a href="#"><?= $navLinks[1]["O Nama"] ?></a>   
      <a href="#"><?= $navLinks[2]["Kontakt"] ?></a>   
       
    </nav>
    <footer> <?= $copyright ?></footer>
</body>
</html>