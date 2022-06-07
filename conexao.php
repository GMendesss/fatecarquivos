<?php

$servidor = "localhost";
$banco = "id18902137_exercicio0905";
$usuario = "id18902137_bingoula";
$senha = "3m3tG*P5E~(R{Lpt";
$porta = "3306";

$conn = mysqli_connect($servidor, $usuario, $senha, $banco, $porta);

if(!$conn){
    die("A conexão falhou: " . mysqli_connect_error());
}
echo " A sua conexão foi efetuada com sucesso!";
?>