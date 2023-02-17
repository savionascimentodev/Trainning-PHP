<?php

// Para cada, imprime o idice e o valor de cada dato do array;
$messes = array("Janeiro","Fevereiro","Março","Abril", "Maio");

foreach ($messes as $index=> $mes) {
  echo "O Indice: ". $index. "<br>";
  echo "O Mês é: ". $mes. "<br>";
}
?>