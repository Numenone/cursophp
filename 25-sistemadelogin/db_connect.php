<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "sistemalogin";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if (!$connect) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>