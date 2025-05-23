<?php

abstract class Banco {
	protected $saldo;
	protected $limiteSaque;
	protected $juros;

	public function setSaldo($s) {
		$this->saldo = $s;
	}

	public function getSaldo() {
		return $this->saldo;
	}

	abstract protected function Sacar($s);
	abstract protected function Depositar($d);
}

class Itau extends Banco {
	public function Sacar($s){
		$this->saldo -= $s;
		echo "<hr> Sacou: ".$s;
	}

	public function Depositar($d){
		$this->saldo += $d;
		echo "<hr> Depositou: ".$d;
	}
}

class Bradesco extends Banco {
	public function Sacar($s){
		$this->saldo -= $s;
	}

	public function Depositar($d){
		$this->saldo += $d;
	}
}

$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr> Saldo: ".$itau->getSaldo();
$itau->Sacar(723);
echo "<hr> Saldo: ".$itau->getSaldo();
$itau->Depositar(883);
echo "<hr> Saldo: ".$itau->getSaldo();