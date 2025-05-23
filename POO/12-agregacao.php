<?php

class Produtos {
	public $name;
	public $valor;


	public function __construct($nome, $valor) {
		$this->name = $nome;
		$this->valor = $valor;
	}
}

class Carrinho {
	public $produtos;

	public function adiciona(Produtos $produto) {
		$this->produtos[] = $produto;
	}

	public function exibirProdutos() {
		foreach ($this->produtos as $produto) {
			echo $produto->name."<br>";
			echo $produto->valor."<hr>";
		}	
	}
}

$produto1 = new Produtos("Notebook", "3200");
$produto2 = new Produtos("Playstation 6", "20000");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);
$carrinho->exibirProdutos();