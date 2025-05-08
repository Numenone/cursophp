<?php

$arquivo = 'arquivo.txt';

$arquivoAberto = fopen($arquivo, 'r'); // modo A, R
$conteudo = "Conteudo de teste\r\n";

$tamanhoArquivo = filesize($arquivo);

//fwrite($arquivoAberto, $conteudo);

while(!feof($arquivoAberto)):
	$linha = fgets($arquivoAberto, $tamanhoArquivo);
	echo $linha.'<br>';
endwhile;



fclose($arquivoAberto);
