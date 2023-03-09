 <?php

 // Inicijalizacija niza
 $niz = ["Ivan", "Marko", "Ana"];

 $grupa = [ 
    "naziv" => "OL-OBE_DEV_H-01/23",
    "brojpolaznika" => 21
             ];

$niz[] = "Lucija";
$niz[] = "Borna";
$grupa["predavac"] = "Ivan Mandić";
$grupa["brojpolaznika"] = 22;


var_dump($grupa["naziv"]);
var_dump(isset($grupa["dvorana"]));

$properties = [
    "Firstname" => "Tom",
    "Surndame" => "Riddle",
    "House" => "Slytherin",
];


//VJEZBA1
$primeNumbers = [2, 3, 5, 7, 11];
var_dump(isset($primeNumbers[2]));
echo $primeNumbers[2];
$primeNumbers [] = 13;
"\n";
$count = count($primeNumbers);
"\n";
echo count($primeNumbers);
"\n";
print_r($primeNumbers);
"\n";
rsort($primeNumbers);
print_r($primeNumbers);

//VJEZBA2

$users = array (
array(
    "Ime" => "Domagoj",
    "Prezime" => "Razum",
    "Godine"=> "30",
    "Spol" => "M",
),
array(
    "Ime" => "Mateja",
    "Prezime" => "Razum",
    "Godine"=> "23",
    "Spol" => "Z",
)
);
print_r($users);
unset($users[0]["Spol"]);
unset($users[1]["Spol"]);
print_r($users);

$users = array (
    array(
        "Ime" => "Maximilian",
        "Prezime" => "Razum",
        "Godine"=> "00",
    ),
);
print_r($users);

