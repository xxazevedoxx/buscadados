<?php
include_once 'conecta.php';

// apartir deste momento eu pego as info q vieram do form
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];

$sql = "INSERT INTO usuario (nome, sobrenome, cpf, email) values ('$nome', '$sobrenome', '$cpf', '$email')";

$res = mysqli_query($conexao, $sql);
mysqli_close($conexao);

?>