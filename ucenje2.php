<?php

$osobe = [

    // 0
    [
        "ime" => "Omar",
        "prezime" => "Sahinovic",
        "godiste" => 1996
    ],

    // 1 
    [
        "ime" => "Vedad",
        "prezime" => "Ibisevic",
        "godiste" => 1986
    ]
    ];

    // echo $osobe[0]["ime"];
    // echo $osobe[1]["godiste"];
    // var_dump($osobe);



    // Godiste osobe
    $date = date("Y") - $osobe[1]["godiste"];

    echo "Ova osoba ima $date ";

?>