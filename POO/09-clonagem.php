<?php

class Pessoa {
	public $idade;

	public function __clone() {
		echo "Clonagem de objetos: ";
	}
}

$pessoa = new Pessoa();
$pessoa->idade = 21;

$pessoa2 = clone $pessoa;
$pessoa2->idade = 34;

echo $pessoa->idade."<hr>";
echo $pessoa2->idade;
