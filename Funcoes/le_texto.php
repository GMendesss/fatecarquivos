<?php


function ler(){
    //variável arquivo armazena o nome e extensão do arquivo.
    $arquivo = "isset_post.txt";
    //variável $fp armazena a conexão com o arquivo e o tipo de ação.
    $fp = fopen ($arquivo , 'r');

    //lê o conteúdo do arquivo aberto.
    $dados = fread($fp , filesize($arquivo));

    //Fecha o arquivo.
    fclose($fp);

    return $dados;

}
echo "<h1><strong>Cadastro do Eleitor</strong></h1>";
echo nl2br(ler());
echo "</br>";
echo "</br>";
echo "<form method='post'>";
echo
"<left>
              <button class='waves-effect waves-light btn type='submit' name='action'  formaction='cartorio.php'>Cadastrar
              </button>
              <button class='waves-effect waves-light btn type='submit' name='action'  formaction='le_texto_while.php'>ler
              </button>
            </left>
            <br/>
        </form>
                <br/>";
echo "</br>";
echo "</br>";