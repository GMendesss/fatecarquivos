<?php

require_once "conn.php";

$nome = $_POST['nome'];
$titulo = $_POST['titulo'];
$secao = $_POST['secao'];
$tipo = $_POST['tipo'];

$sqlInsert = "INSERT INTO Cartorio (nome, titulo, secao, tipo) 
VALUES ('$nome', '$titulo', '$secao', '$tipo')";

$rs = mysqli_query($conn,$sqlInsert) or die ("Erro ao cadastrar dados");
echo "<br>";
echo "Dados cadastrados com sucesso";

?>