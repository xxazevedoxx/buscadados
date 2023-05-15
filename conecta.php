<?php
$serv = "localhost";
$user = "root";
$pass = "";
$db = "carros";

$conexao = mysqli_connect($serv, $user, $pass, $db);

if (!$conexao) {
    die("Falha na conexão");
}

?>