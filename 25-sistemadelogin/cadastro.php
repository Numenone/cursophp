<?php
require_once 'db_connect.php';
session_start();

if (isset($_POST['btn-cadastrar'])):
    $erros = array();

    $nome = mysqli_real_escape_string($connect, $_POST['nome']);
    $login = mysqli_real_escape_string($connect, $_POST['login']);
    $senha = $_POST['senha'];
    $senha_confirmar = $_POST['senha_confirmar'];

    if (empty($nome) || empty($login) || empty($senha) || empty($senha_confirmar)):
        $erros[] = "<li>Todos os campos são obrigatórios.</li>";
    elseif ($senha !== $senha_confirmar):
        $erros[] = "<li>As senhas não coincidem.</li>";
    else:
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql);

        if (mysqli_num_rows($resultado) > 0):
            $erros[] = "<li>Login já existe, escolha outro.</li>";
        else:
            $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
            $sql = "INSERT INTO usuarios (nome, login, senha) VALUES ('$nome', '$login', '$senha_hash')";

            if (mysqli_query($connect, $sql)):
                header('Location: index.php');
                exit;
            else:
                $erros[] = "<li>Erro ao cadastrar usuário.</li>";
            endif;
        endif;
    endif;
endif;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro</title>
</head>
<body>
<h1>Cadastro</h1>

<?php if (!empty($erros)): ?>
    <ul>
        <?php foreach ($erros as $erro): ?>
            <li><?php echo $erro; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Nome: <input type="text" name="nome" required><br>
    Login: <input type="text" name="login" required><br>
    Senha: <input type="password" name="senha" required><br>
    Confirmar Senha: <input type="password" name="senha_confirmar" required><br>
    <button type="submit" name="btn-cadastrar">Cadastrar</button>
</form>

<p><a href="index.php">Voltar para login</a></p>
</body>
</html>