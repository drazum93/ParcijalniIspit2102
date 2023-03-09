<?php

$integer = 10;
$float = 7.53;
$string= 'Hello World';
$bool = true;

echo "Varijable:\nInteger: ", $integer, "\nReal: ", $float, "\nString: ", $string, "\nBoolean: ", $bool, "\n\n";


// Definiranje varijabli
$a = 10;
$b = 20;
$c = "Prva rijec";
$d = "Druga rijec";

// Aritmetički operatori s ispisom
echo "a+b= ", $a + $b, "\n";
echo "a-b= ", $a - $b, "\n";
echo "a*b= ", $a * $b, "\n";
echo "a/b= ", $a / $b, "\n";
echo "a%b= ", $a % $b, "\n";

// Kombinirani operator dodjele
$f = $c . " - " .$d;
echo "Konkatenacija: ", $f, "\\nn";

// Operator usporedbe ( veće ili jednako )
echo $a += $b, "\n"; 

// Var_dump funkcija za ispisivanje rezulata
var_dump($a > $b);

// Inkrement
echo $a++, "\n";

// Dekrement
echo $b--, "\n"; 




