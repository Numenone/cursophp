<?php
require_once 'db_connect.php';
session_start();

if(isset($_POST['btn-enviar'])):
    $erros = array();
    
    $login = mysqli_real_escape_string($connect, $_POST['login']);
    $senha = $_POST['senha'];

    if(empty($login) || empty($senha)):
        $erros[] = "<li>O campo login/senha precisa ser preenchido.</li>";
    else:
        $sql = "SELECT * FROM usuarios WHERE login = '$login' LIMIT 1";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0):
            $dados = mysqli_fetch_array($resultado);
            
            if(password_verify($senha, $dados['senha'])):
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                mysqli_close($connect);
                header('Location: home.php');
                exit;
            else:
                $erros[] = "<li>Usuário e senha não conferem.</li>";
            endif;
        else:
            $erros[] = "<li>Usuário inexistente.</li>";
        endif;
    endif;
endif;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>
<body>
<h1>Login</h1>

<?php if (!empty($erros)): ?>
    <ul>
        <?php foreach ($erros as $erro): ?>
            <li><?php echo $erro; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Login: <input type="text" name="login"><br>
    Senha: <input type="password" name="senha"><br>
    <button type="submit" name="btn-enviar">Entrar</button>
</form>

<p><a href="cadastro.php">Cadastrar-se</a></p>
</body>
</html>