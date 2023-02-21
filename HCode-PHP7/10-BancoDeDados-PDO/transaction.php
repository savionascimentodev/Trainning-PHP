<?php 
// Com o PDO também podemos trabalhar com transações (transactions) -> ou tudo da certo e eu continuo ou eu cancelo tudo;

// Criando a conexão com o bd;
$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","root");

// Iniciando a transação, antes do statement;
$conn->beginTransaction();

// Váriavel statment que significa comando;
$stmt = $conn->prepare("DELETE FROM tb_users WHERE idUsuario = ?");

// Mandar os parâmetros;
$id=3;

// Executando;
$stmt->execute(array($id));

// Cancelando a transaction;
// $conn->rollback();

// Confirmando a transaction;
$conn->commit();

echo "Deletado com sucesso";



?>