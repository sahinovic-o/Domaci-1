<?php

$osoba = [
    "ime" => "Omar", //key (assoc) => value (vrijednost)
    "prezime" => "Sahinovic",
    "godine" => 27

];

// echo $osoba["ime"];
// echo $osoba["prezime"];
// echo $osoba["godine"];

$automobil = [
    "marka" => "Mercedes",
    "model" => "AMG GT 63S",
    "godiste" => 2017
];

// echo "Prodajem automobil $automobil['marka'] - $automobil['model'] proizveden $automobil['godiste']";

// echo "Prodajem automobil ".$automobil['marka']." ".$automobil['model']." proizveden ".$automobil['godiste'];

echo "Prodajem automobil {$automobil['marka']} {$automobil['model']} proizveden {$automobil['godiste']}";

?>