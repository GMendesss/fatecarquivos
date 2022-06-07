<?php

if (isset($_POST['nome']) and isset($_POST['titulo']) and isset($_POST['secao']) and isset($_POST['tipo']))
{
  $nome = $_POST['nome'];
  $titulo = $_POST['titulo'];
  $secao = $_POST['secao'];
  $tipo = $_POST['tipo'];


  $dados = "$nome\n$titulo\n$secao\n$tipo\r\n\n";

  $arquivo = fopen('isset_post.txt', 'a+');
  fwrite($arquivo , $dados);
  fclose($arquivo);
}

echo 
 "<b>Nome:</b> $nome 
 <br> <b>Titulo:</b> $titulo 
 <br> <b>Seção</b>: $secao 
 <br> <b>Tipo</b>: $tipo ";
     
 echo "</br>";
echo "</br>";
echo "<form method='post'>";
echo
"<left>
              <button class='waves-effect waves-light btn type='submit' name='action'  formaction='cartorio.php'>Cadastrar
              </button>
              <button class='waves-effect waves-light btn type='submit' name='action'  formaction='le_texto_while.php'>ler
              </button>
              <button class='waves-effect waves-light btn type='submit' name='action'  formaction='delete1.php'>Delete
              </button>
            </left>
            <br/>
        </form>
                <br/>";
echo "</br>";
echo "</br>";