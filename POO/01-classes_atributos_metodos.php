<?php

class Pessoa {
	 public $nome;
	 public $idade;

	 public function Falar() {
	 	echo $this->nome." de ".$this->idade." anos, acabou de falar".'<br>';
	 }
}

$felipe = new Pessoa();
$felipe->nome = "Felipe Ferreira Ribeiro";
$felipe->idade = 21; 
$felipe->Falar();
var_dump($felipe);


class Login {
	private $email;
	private $senha;
	private $nome;

	public function __construct($email, $senha, $nome) {
		$this->nome = $nome;
		$this->setEmail($email);
		$this->setSenha($senha);
	}

	public function getNome() {
		return $this->nome;
	}


	public function getEmail() {
		return $this->email;
	}

	public function setEmail($e) {
		$email = filter_var($e, FILTER_SANITIZE_EMAIL);
		$this->email = $email;
	}

	public function getSenha() {
		return $this->senha;
	}

	public function setSenha($s) {
		$this->senha = $s;
	}

	public function Logar() {
		if($this->email == "teste@teste.com" && $this->senha == "123456"):
			echo "Logado com sucesso!";
		else:
			echo "Dados inválidos";
		endif;
	}

}

$logar = new Login("teste@teste.com", "123456", "Felipe Ribeiro");
//$logar->email = "teste@teste.com";
//$logar->senha = "123456";
//$logar->setEmail("teste@teste.com");
//$logar->setSenha("123456");
$logar->Logar();
echo '<br>';
echo $logar->getEmail().'<br>';
echo $logar->getSenha().'<br>';
echo $logar->getNome();