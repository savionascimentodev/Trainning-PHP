<?php

// Criando uma seção;
session_start();

$_SESSION["nome"] = "Hcode";

// Usado para encerrar uma seção;
// session_unset($_SESSION['nome']);

// Pegar o id da seção; 
echo session_id();

// Gera um id de seção a cada reload;
echo session_regenerate_id();

// Mostra o status da seção;
var_dump(session_status());
?>