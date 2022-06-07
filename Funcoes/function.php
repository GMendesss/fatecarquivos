<?php 

function teste($nome)
{
	if ($nome == 'Fatec')
	{
		echo 'Mensagem exibida se $nome for igual a Fatec, em seguida para e execução da função';
		return;
	}
	echo 'A função continua se $nome não for Fatec';
}
teste('Fatec');
?>