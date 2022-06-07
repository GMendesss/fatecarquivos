<?php

require_once "conexao.php";

$codigo = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$data = $_POST['data'];
$mensagem = $_POST['mensagem'];

$sqlUpdate = "UPDATE users SET user_name = 'nome', user_email = 'email', user_date = 'data', user_mensagem = 'mensagem' 
WHERE user_id = '$codigo'";

$rs = mysqli_query($conn,$sqlUpdate) or die ("Erro ao cadastrar dados");
echo "<br>";
echo "Dados cadastrados com sucesso";

?>