<?php

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
require_once 'functions.php';
$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);

$conn = getConnection();
$statement = $conn->prepare("SELECT "
        . "usuario, "
        . "senha "
        . "FROM tb_login "
        . "WHERE usuario = :usuario "
        . "AND senha = :senha");
$statement->bindParam(':usuario', $usuario, PDO::PARAM_STR);
$statement->bindParam(':senha', $senha, PDO::PARAM_STR);
$statement->execute();
$context = $statement->fetch();

if ($context) {
    $_SESSION['logado'] = true;
    header('Location: home');
} else {
    $_SESSION['logado'] = false;
    header('Location: entrar');
}
