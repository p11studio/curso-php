<?php

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;


//== Igual
//var_dump($a == $b);
//var_dump($a == $b2);
//var_dump($a === $b2);

// === Identico
//var_dump($a === $b);
//var_dump($a === $b2);


// != Diferente
//var_dump($a != $b);
//var_dump($a != $b2);
//var_dump($a !== $b2);

// < Menor que
//var_dump($a < $b);
//var_dump($c < $b);
//var_dump($d < $b);


// > Mayor que
//var_dump($a > $b);
//var_dump($c > $b);
//var_dump($d > $b);

// > Mayor o igual que
//var_dump($a >= $b);
//var_dump($c >= $b);
//var_dump($d >= $b);


// < Menor o igual que
//var_dump($a <= $b);
//var_dump($c <= $b);
//var_dump($d <= $b);

// <=> Nave espacial
//echo 2 <=> 1;
//echo 5 <=> 10;
//echo "\n";


//Fusion del null

$edad_de_pepito = 23;

echo $edad_de_juanito ?? $edad_de_pepito;

echo "\n";