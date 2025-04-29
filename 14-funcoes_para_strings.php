<<<<<<< HEAD
<?php

##strtoupper - str to upper

$nome = "felipe ribeiro";

$novoNome = strtoupper($nome);
echo $novoNome.'<hr>'; 


##strtolower - str to lower

$pequenoNome = strtolower($nome);
echo $pequenoNome.'<hr>';

##substr = fazer pra começar de uma parte da string e limitar até onde é lido 

$mensagem = "Olá mundo";
echo substr($mensagem, 4, 4).'<hr>';


##str_pad - inserir caracteres a mais na string (podendo alterar qual o caracter)

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7, "*");
echo $novoObjeto.'<hr>';


##str_repeat - repetir uma string

$string = str_repeat("Sucesso! ", 5);
echo $string.'<hr>';

##strlen - comprimento da string (lenght)

echo strlen($mensagem).'<hr>';

##str_replace - trocar parte da string

$texto = "A seleção Argentina será campeã da copa do mundo de 2018";
$novoTexto = str_replace("Argentina", "Brasil", $texto);
echo $novoTexto."<hr>";


##strpos - posição do texto

echo strpos($texto, "copa");
=======
<?php

##strtoupper - str to upper

$nome = "felipe ribeiro";

$novoNome = strtoupper($nome);
echo $novoNome.'<hr>'; 


##strtolower - str to lower

$pequenoNome = strtolower($nome);
echo $pequenoNome.'<hr>';

##substr = fazer pra começar de uma parte da string e limitar até onde é lido 

$mensagem = "Olá mundo";
echo substr($mensagem, 4, 4).'<hr>';


##str_pad - inserir caracteres a mais na string (podendo alterar qual o caracter)

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7, "*");
echo $novoObjeto.'<hr>';


##str_repeat - repetir uma string

$string = str_repeat("Sucesso! ", 5);
echo $string.'<hr>';

##strlen - comprimento da string (lenght)

echo strlen($mensagem).'<hr>';

##str_replace - trocar parte da string

$texto = "A seleção Argentina será campeã da copa do mundo de 2018";
$novoTexto = str_replace("Argentina", "Brasil", $texto);
echo $novoTexto."<hr>";


##strpos - posição do texto

echo strpos($texto, "copa");
>>>>>>> 0a5b2c7 (Added files to the repo.)
?>