<?php

class Veiculo {
	private $modelo;
	public $cor;
	public $ano;

	public function Andar() {
		echo "Andou";
	}

	public function Parar() {
		echo "Parou";
	}

	public function setModelo($m) {
		$this->modelo = $m;
	}

	public function getModelo() {
		return $this->modelo;
	}
}


class Carro extends Veiculo {
	public function ligarLimpador () {
		echo "Limpando o carro";
	}
	
}

class Moto extends Veiculo {
	public function darGrau() {
		echo "Dando grau B)";
	}
}

$carro = new Carro();
$carro->setModelo("Fiesta");
$carro->cor = "Vermelho";
$carro->ano = "2008";
$carro->Andar();
echo "<br>";
$carro->ligarLimpador();
var_dump($carro);


$moto = new Moto();
$moto->setModelo("CB1000");
$moto->cor = "Preta";
$moto->ano = "2017";
$moto->Parar();
echo "<br>";
$moto->darGrau();
var_dump($moto);

$veiculo = new Veiculo();
$veiculo->setModelo("Gol");
echo $veiculo->getModelo();