<?php

$numero = 10;

if ($numero == 10):
	echo "é igual a 10";
elseif($numero <= 9):
	echo "é menor ou igual a 9";
else:
	echo "não é igual a 10";
endif;

echo '<hr>';

$media = 1;

echo ($media >= 8) ? "Aprovado!" : "Reprovado.";

echo '<hr>';

$cor = "verde";

switch ($cor):
	case 'vermelho':
		echo "sua cor preferida é o vermelho";
		break;
	case 'verde':
		echo "sua cor preferida é o verde";
		break;
	case 'azul':
		echo "sua cor preferida é o azul";
		break;
endswitch;


?>