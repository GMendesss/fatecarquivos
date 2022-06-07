<?php

if (isset($_GET['nome']) and isset($_GET['data']) and isset($_GET['email']) and isset($_GET['mensagem']))
{
  $name = $_GET['nome'];
  $data = $_GET['data'];
  $email = $_GET['email'];
  $mensagem = $_GET['mensagem'];


  $dados = "$name\n$data\n$email\n$mensagem\r\n\n";

  $arquivo = fopen('isset_get.txt', 'a+');
  fwrite($arquivo , $dados);
  fclose($arquivo);
}

echo 
 "Nome: $name 
 <br> Email: $email
 <br> Data: $data
 <br> Mensagem: $mensagem";
     