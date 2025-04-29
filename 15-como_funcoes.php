<?php

function exibirNome($nome) {
	echo "Meu nome é $nome";
}

exibirNome("Felipe Ribeiro");

echo '<hr>';

function calcularMedia($nome, $n1, $n2, $n3, $n4) {
	$media = ($n1 + $n2 + $n3 + $n4) / 4; 
	if ($media >= 7):
		echo "$nome foi aprovado com a média $media!";
	else:
		echo "$nome foi reprovado...";
	endif;
}	

calcularMedia("Felipe", 7, 7, 9, 9);

?>