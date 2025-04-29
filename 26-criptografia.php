<<<<<<< HEAD
<?php

$senha = "123456";
$senha_db = '7c4a8d09ca3762af61e59520943dc26494f8941b$2y$10$RJMaMiPvIiwcwDJmalVUSefKf4VdXhOADlMw/PgJY5HgCHtqTphSy';
##base64

$novaSenha = base64_encode($senha);
echo "base64: ". $novaSenha.'<br>';
echo "Sua senha é: ". base64_decode($senha);
echo '<hr>';

##md5

echo "Md5: ".md5($senha);
echo '<hr>';

##sha1

echo "Sha1: ". sha1($senha);


$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
echo $senhaSegura.'<hr>';

if(password_verify($senha, $senha_db)):
	echo "Senha válida";
else:
	echo "Senha inválida";
endif;

=======
<?php

$senha = "123456";
$senha_db = '7c4a8d09ca3762af61e59520943dc26494f8941b$2y$10$RJMaMiPvIiwcwDJmalVUSefKf4VdXhOADlMw/PgJY5HgCHtqTphSy';
##base64

$novaSenha = base64_encode($senha);
echo "base64: ". $novaSenha.'<br>';
echo "Sua senha é: ". base64_decode($senha);
echo '<hr>';

##md5

echo "Md5: ".md5($senha);
echo '<hr>';

##sha1

echo "Sha1: ". sha1($senha);


$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
echo $senhaSegura.'<hr>';

if(password_verify($senha, $senha_db)):
	echo "Senha válida";
else:
	echo "Senha inválida";
endif;

>>>>>>> 0a5b2c7 (Added files to the repo.)
?>