<?php

// ^ inicio de expressao
// $ fim da expressao
// ^[a-z]$ -- a-z letra minuscula -- a-Za-z letras maiusculas e minusculas -- A-Z letras maiusculas -- a-Za-z0-9 letras e numeros
// /i no final = case insensitive para não diferenciar maiusculas de minusculas
// [] conjunto de caracteres
// {} ocorrencias - ?{0,1} *{0,} +{1,}

$string = "contato@gmail.com";
$padrao = "/^[a-z0-9.\-\_]+@[a-z0-9-\_]+\.(com|br|com.br|net)$/";

if(preg_match($padrao, $string)):
	echo "Válido".'<hr>';
	echo $string;
else:
	echo "Inválido".'<hr>';
endif;