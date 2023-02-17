<?php

// Exemplo de um for que mostra na tela enquanto for menor ou igual a 10;
for ($i = 0; $i <= 10; $i++){
  echo $i . '<br>';
}

// Exemplo de criar um for que aumenta de 100 em 100, com uma valicação > 200 e <800;
for ($i = 0; $i <= 1000; $i+=100){

  if($i > 200 && $i <800) continue;

  if($i === 900) break;
  // Chegou no 900 acabou por causa do break, não chega no 1000;

  echo $i . '<br>';
}
?>