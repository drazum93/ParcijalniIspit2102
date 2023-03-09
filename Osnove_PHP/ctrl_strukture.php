<?php

//Definiranje varijabli
$a = 5;
$b = 10;
$c = 15;

//Provjeriti da li je vrijednost b između a i c
if($b >$a && $b <$c) {
    echo "Variable b is between variables a and c", "\n";
} else {
    echo "Variable b is not between variables a and c","\n";
}


//Provjera i ispis rezulata
switch(date("N")) {
    case 1:
        echo "Danas je ponedjeljak.";
        break;
    case 2:
        echo "Danas je utorak.";
        break;
    case 3:
        echo "Danas je srijeda.";
        break;
    case 4:
        echo "Danas je četvrtak.";
        break;
    case 5:
        echo "Danas je petak.";
        break;
    case 6:
        echo "Danas je subota.";
        break;
    case 7:
        echo "Danas je nedjelja.";
    default:
        echo "Nepostojeći dan.";
        break; 
        "\n";    
    }
"\n";
    $i = 1;
while ($i < 5) {
    echo $i . " ", "\n";
    $i++;
}
?>