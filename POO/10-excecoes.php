<?php

class Newsletter {
	public function cadastrarEmail($email){

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
			throw new Exception("Esse email não é válido", 500);
		else:
			echo "Email cadastrado com sucesso!";
		endif;
	}
}

$newsletter = new Newsletter();

try {
$newsletter->cadastrarEmail("teste@");
} catch(Exception $e) {
	echo "Mensagem: ".$e->getMessage()."<br>";
	echo "Código: ".$e->getCode()."<br>";
	echo "Linha: ".$e->getLine()."<br>";
	echo "Arquivo: ".$e->getFile()."<br>";
} 