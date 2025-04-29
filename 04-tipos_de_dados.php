<<<<<<< HEAD
<?php

//ESCALARES

//string
$nome = "123";
var_dump($nome);
if(is_string($nome)):
	echo "É uma string";
else:
	echo "Não é uma string";
endif;
echo "<hr>";

//int
$idade = 27;
var_dump($idade);
if(is_int($idade)):
	echo "É um inteiro";
else:
	echo "Não é um inteiro";
endif;
echo "<hr>";

//float
$numero = 123.45;
var_dump($numero);
if(is_float($numero)):
	echo "É um float";
else:
	echo "Não é um float";
endif;
echo "<hr>";

//boolean
$admin = false;
var_dump($admin);
if(is_bool($admin)):
	echo "é um boolean";
else:
	echo "Não é um boolean";
endif;
echo "<hr>";

//// compostos
$carros = array("Gol", "Uno", "Camaro", 12, 26.312323, true);
var_dump($carros);
if(is_array($carros)):
	echo "é um array";
else:
	echo "Não é um array";
endif;
echo "<hr>";

//object
class Cliente {
	public $nome;
	public function atribuirNome($nome) {
		$this->$nome = $nome;
	}
}

$cliente = new Cliente();
$cliente->atribuirNome("Felipe");
var_dump($cliente);
if(is_object($cliente)):
	echo "é um objeto";
else:
	echo "Não é um objeto";
endif;
echo "<hr>";

// NULL
$cidade = null;
var_dump($cidade);


?>
=======
<?php

//ESCALARES

//string
$nome = "123";
var_dump($nome);
if(is_string($nome)):
	echo "É uma string";
else:
	echo "Não é uma string";
endif;
echo "<hr>";

//int
$idade = 27;
var_dump($idade);
if(is_int($idade)):
	echo "É um inteiro";
else:
	echo "Não é um inteiro";
endif;
echo "<hr>";

//float
$numero = 123.45;
var_dump($numero);
if(is_float($numero)):
	echo "É um float";
else:
	echo "Não é um float";
endif;
echo "<hr>";

//boolean
$admin = false;
var_dump($admin);
if(is_bool($admin)):
	echo "é um boolean";
else:
	echo "Não é um boolean";
endif;
echo "<hr>";

//// compostos
$carros = array("Gol", "Uno", "Camaro", 12, 26.312323, true);
var_dump($carros);
if(is_array($carros)):
	echo "é um array";
else:
	echo "Não é um array";
endif;
echo "<hr>";

//object
class Cliente {
	public $nome;
	public function atribuirNome($nome) {
		$this->$nome = $nome;
	}
}

$cliente = new Cliente();
$cliente->atribuirNome("Felipe");
var_dump($cliente);
if(is_object($cliente)):
	echo "é um objeto";
else:
	echo "Não é um objeto";
endif;
echo "<hr>";

// NULL
$cidade = null;
var_dump($cidade);


?>
>>>>>>> 0a5b2c7 (Added files to the repo.)
