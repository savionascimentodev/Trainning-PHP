<?php 
// Delete no banco de dados com PDO;

// Criando a conexão com o bd;
$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","root");

// Váriavel statment que significa comando;
$stmt = $conn->prepare("DELETE FROM tb_users WHERE idUsuario = :ID");

// Mandar os parâmetros;
$id=5;

// Fazendo o bind, conectando os parâmetros com a query;
$stmt->bindParam(":ID", $id);

// Executando;
$stmt->execute();

echo "Deletado com sucesso";
?>