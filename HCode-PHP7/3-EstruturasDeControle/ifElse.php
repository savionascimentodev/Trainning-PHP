<?php

$qualIdade = 23;
$idadeAtual = 15;
$idadeMaior = 18;
$idadeMaxima = 40;

// Exemplo de If e Else;
if($idadeAtual < $idadeMaior) {
  echo 'Não é de Maior idade';
} else {
  echo 'É de Maior idade';
}

// Exemplo de If e ElseIf;
if($qualIdade < 15) {
  echo 'Criança';
} else if($qualIdade < $idadeMaior){
  echo 'Adolescente';
} else if ($qualIdade < $idadeMaxima)
  echo 'Adulto';
  else {
    'Idoso';
  }

// Operador Ternário
echo($qualIdade < $idadeMaior) ? "Menor de idade" : "Maior de idade";
?>