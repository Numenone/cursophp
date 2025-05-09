<?php

class Login {

	public static $user;

	public static function verificaLogin() {
		echo "O usuário é o ".self::$user." e está logado!";
	}

	public function sairSistema() {
		echo "<hr>";
		echo "O usuário deslogou.";
	}
}

Login::$user = "admin";
Login::verificaLogin();
sleep(3);
$login = new Login();
$login->sairSistema();
