<?php 
include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];
$csenha = $_POST['csenha'];

$sql = "INSERT INTO `cadastros`(`email`, `senha`, `csenha`) 
VALUES ('$email',
        $senha,
        '$csenha')";

$inserir = mysqli_query ($conexao, $sql);

?> 