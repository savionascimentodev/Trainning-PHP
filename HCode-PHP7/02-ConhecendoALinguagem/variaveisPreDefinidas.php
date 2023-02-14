<?php
// Exemplo de uma variavel pré definida GET, recebe valores e passa para Urls (Query String);

// Para converter (cast) para um número inteiro coloca (int)na frente;
$nome = (int)$_GET["user"];
var_dump($nome);


// Como pegar Ip do usuário
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;


// Escopos de váriaveis 
$user = 'Savio'; // Aqui não funciona pois não está dentro do escopo da váriavel;

function printNome(){
  global $user; // Usado para pegar uma váriavel global;
  echo $user;
}

printNome();
?>