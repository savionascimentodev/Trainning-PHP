<?php 
// Insert no banco de dados com PDO;

// Criando a conexão com o bd;
$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","root");

// Váriavel statment que significa comando;
$stmt = $conn->prepare("INSERT INTO tb_users (desLogin,desSenha) VALUES(:LOGIN,:PASSWORD)");

// Mandar os parâmetros;
$login = "jose";
$password = "9999";

// Fazendo o bind, conectando os parâmetros com a query;
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

// Executando;
$stmt->execute();

echo "Inserido com sucesso";
?>