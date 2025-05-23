<?php

class Pessoa {
	private $dados = array();

	public function __set($nome, $valor) {
		$this->dados[$nome] = $valor;
	}

	public function __get($nome) {
		return $this->dados[$nome];
	}

	public function __tostring() {
		return "Tentei imprimir o objeto";
	}

	public function __invoke() {
		return "Objeto como função";
	}

}

$pessoa = new Pessoa();
$pessoa->nome = "Malafaia";
$pessoa->idade = 322;
$pessoa->sexo = "F";
var_dump($pessoa);

echo $pessoa->nome."<br>";
echo $pessoa->idade."<br>";
echo $pessoa->sexo."<br>";

echo $pessoa."<br>";
echo $pessoa();