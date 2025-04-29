<?php
session_start();

if(!isset($_SESSION['logado'])):
    header('Location: index.php');
    exit;
endif;

require_once 'db_connect.php';

$id = (int) $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Área Restrita</title>
</head>
<body>
    <h1>Olá, <?php echo htmlspecialchars($dados['nome']); ?>!</h1>
    <p><a href="logout.php">Sair</a></p>
</body>
</html>