
<?php

if(isset($_POST['enviar-formulario'])):
	$erros = array();


	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	

	$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
	if(!filter_var($idade, FILTER_VALIDATE_INT)):
		$erros[] = "Idade precisa ser um inteiro";
	endif;

	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	

	$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
	

## validações

/*	if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
		$erros[] = "Idade precisa ser um inteiro";
	endif;

	if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
		$erros[] = "Email inválido";
	endif;

	if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
		$erros[] = "Peso precisa ser um float";
	endif;

	if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
		$erros[] = "IP inválido";
	endif;

	if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
		$erros[] = "URL inválida";
	endif;
*/
	if(!empty($erros)):
		foreach ($erros as $erro):
			echo "'<li>' $erro '</li>'";
		endforeach;
	else:
		echo "Parabéns, seus dados estão corretos!";
	endif;

endif;

?>

<html>
<body>



<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
Nome: <input type="text" name="Nome"><br>
Idade: <input type="text" name="idade"><br>
Email: <input type="text" name="email"><br>
<?php ### IP: <input type="text" name="ip"><br> ?>
URl: <input type="text" name="url"><br>
<button type="submit" name="enviar-formulario"> Enviar </button><br>
</form>

</body>
</html>




