<?php

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
require_once 'functions.php';
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$conn = getConnection();
$statement = $conn->prepare("SELECT "
        . "senha "
        . "FROM tb_login "
        . "WHERE usuario = :usuario ");
$statement->bindParam(':usuario', $usuario, PDO::PARAM_STR);
$statement->execute();
$context = $statement->fetch();

if ($context) {
    if(password_verify($senha, $context['senha'])){
    $_SESSION['logado'] = true;
    header('Location: home');
    }else {
        $_SESSION['logado'] = false;
        header('Location: entrar');
    }
} else {
    $_SESSION['logado'] = false;
    header('Location: entrar');
}
