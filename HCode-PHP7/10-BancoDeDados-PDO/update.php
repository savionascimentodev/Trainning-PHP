<?php 
// Update no banco de dados com PDO;

// Criando a conexão com o bd;
$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","root");

// Váriavel statment que significa comando;
$stmt = $conn->prepare("UPDATE tb_users SET desLogin = :LOGIN, desSenha = :PASSWORD WHERE idUsuario = :ID");

// Mandar os parâmetros;
$login = "matheus";
$password = "12";
$id=4;

// Fazendo o bind, conectando os parâmetros com a query;
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

// Executando;
$stmt->execute();

echo "Dados alterados com sucesso";
?>