<?php
include_once 'php_action/db_connect.php';
include_once 'includes/header.php';

$dados = null;

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = mysqli_real_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $dados = mysqli_fetch_array($resultado);
    } else {
        echo "<p class='red-text'>Cliente não encontrado.</p>";
    }
} else {
    echo "<p class='red-text'>ID inválido.</p>";
}
?>

<div class="row">
	<div class="col s12 m4 push-m4 center ">
		<h3 class="light"> Editar Cliente </h3>
		<form action="php_action/update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
			<div class="input-field col s12">
				<i class="material-icons prefix">account_circle</i>
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
				<label for="nome">Nome</label>
			</div>
			<div class="input-field col s12">
				<i class="material-icons prefix">account_circle</i>
				<input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>">
				<label for="sobrenome">Sobrenome</label>
			</div>
			<div class="input-field col s12">
				<i class="material-icons prefix">email</i>
				<input type="text" name="email" id="email" value="<?php echo $dados['email']; ?>">
				<label for="email">Email</label>
			</div>
			<div class="input-field col s12">
				<i class="material-icons prefix">account_circle</i>
				<input type="text" name="idade" id="idade" value="<?php echo $dados['idade']; ?>">
				<label for="idade">Idade</label>
			</div>

			<button type="submit" name="btn-editar" class="btn"> Atualizar </button>
			<a href="index.php" class="btn cyan"> Listar Clientes </a>
		</form>
	</div>
</div>


<?php
include_once 'includes/footer.php';
?>