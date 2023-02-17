<?php

// Como criar um array;
$frutas = array('Laranja', 'Abaxaci', 'Melancia');

print_r($frutas);

// Exemplo de array bidimensional;
$carros[0][0] = 'GM';
$carros[0][1] = 'Palio';
$carros[0][2] = 'Gol';

$carros[1][0] = 'Ford';
$carros[1][1] = 'Fiat';
$carros[1][2] = 'Volkswagen';

echo $carros[0][2]; // Gol;

// Pega o ultimo valor do array bidimensional;
echo end($carros[1]);
?>