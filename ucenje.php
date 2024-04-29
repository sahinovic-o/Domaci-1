<?php

// $automobili = [
//     "Zastava" =>["yugo", "scala", "101"],
// ];

// echo $automobili["Zastava"][1]; 

$osobe = [
    "Omar" => [
        "prezime" => "Sahinovic",
        "godine" => 27,
        "progammer" => true,

    ],

    "Vedad" => [
        "prezime" => "Ibisevic",
        "godine" => 38,
        "progammer" => false,
    ],
];

// echo $osobe["Omar"]["prezime"];


$osobe["Jelena"] = [
    "prezime" => "Nikolic",
    "godine" => 38,
    "programmer" => true,
    "ime" => "Jelena"
];

// var_dump($osobe);


// echo "Ja se zovem {$osobe['Jelena']['ime']}, a prezivam se {$osobe['Jelena']['prezime']}";

// $imena = array_keys($osobe);
// var_dump($imena);

// var_dump($osobe["Omar"]["prezime"]);

// $firstKey = array_key_first([$osobe][1]);
// var_dump($firstKey)



//PHP, "get all values", "specific key", "associative array"  ---- struktuiranje pitanja i googlanje
// Jezik, sta zelim, odakle zelim, gdje zelim / koji podatak
// PHP - replace "s" with "a", string

$prezimena = array_column($osobe, "prezime");
var_dump($prezimena);
?>