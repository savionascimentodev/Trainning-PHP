<?php

// While significa faça enquanto, posso usar para qualquer estrutura enquanto for true;

$condicao = true;

while($condicao) {
  // Função do PHP para pegar um numero aléatorio entre dois parâmetros informados;
  $numero = rand(1,10);

  if($numero === 3) {
    echo 'TRÊSSSSS';
    $condicao = false;
  }

  echo $numero . " ";

}
?>