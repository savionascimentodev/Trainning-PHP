<?php 
// PDO - Php Data Object;

// Conexão com o bando de dados mysql;
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "root");

// Preparando a query para trazer os dados da tabela selecionada
$stmt = $conn->prepare("SELECT * FROM tb_users ORDER BY desLogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
  foreach ($row as $key => $value) {
  	echo "<strong>".$key.": </strong>".$value."<br/>";
  }

	echo "========================================<br/>";
}
?>