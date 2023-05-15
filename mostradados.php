<?php
include 'conecta.php';

$sql = "SELECT * FROM usuario ";
$resultado = mysqli_query($conexao, $sql);
$linhas = mysqli_num_rows($resultado);

for ($i = 0; $i < $linhas; $i++){
    $user = mysqli_fetch_array($resultado);
    echo $user['nome'] . " -- ";
    echo $user['sobrenome'] . " -- ";
    echo $user['cpf'] . " -- ";
    echo $user['email'] . " -- ";
}