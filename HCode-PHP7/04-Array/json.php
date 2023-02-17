<?php

// Como criar um array;
$frutas = array('Laranja', 'Abaxaci', 'Melancia');
$json = ["Laranja","Abaxaci","Melancia"];

// Transforma um array em Json;
echo json_encode($frutas);

// Transforma um Json em array;
echo json_decode($json,true)
?>