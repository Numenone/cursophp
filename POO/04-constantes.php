<?php

class Pessoa {
	const nome = "Felipe";

	public function exibirNome() {
		echo self::nome;
	}
}

$pessoa = new Pessoa();
$pessoa->exibirNome();
echo "<hr>";

class Felipe extends Pessoa {
	const nome = "Ribeiro";

	public function exibirNome() {
		echo parent::nome;
	}
}

$felipe = new Felipe();
$felipe->exibirNome();