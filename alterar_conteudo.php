<?php

require_once'functions.php';
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
if (key_exists('request', $_SESSION)) {
    $requisicao = $_SESSION['request'];
    $conteudo = $_POST['editor'];
    $conn = getConnection();


    $statement = $conn->prepare("UPDATE tb_content "
            . "set content = :pContent "
            . "WHERE request = :request");
    $statement->bindParam(':request', $requisicao, PDO::PARAM_STR);
    $statement->bindParam(':pContent', $conteudo, PDO::PARAM_STR);
    $statement->execute();
    header("Location: $requisicao");

    die;
}
header('Location: Home');
