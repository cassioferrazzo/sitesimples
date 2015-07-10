<?php

function getContent($request) {
    $conn =getConnection() ;
    $statement = $conn->prepare("SELECT "
            . "content "
            . "FROM tb_content "
            . "WHERE request = :request");
    $statement->bindParam(':request', $request, PDO::PARAM_STR);
    $statement->execute();
    $context = $statement->fetch();
    if ($context) {
        return $context['content'];
    }
    return "NULL";
}

;

function getConnection() {
    $dbInfo = include './fixture/db_data.php';
    $host = (isset($dbInfo['db']['host'])) ? $dbInfo['db']['host'] : null;
    $dbname = (isset($dbInfo['db']['dbname'])) ? $dbInfo['db']['dbname'] : null;
    $user = (isset($dbInfo['db']['user'])) ? $dbInfo['db']['user'] : null;
    $pass = (isset($dbInfo['db']['pass'])) ? $dbInfo['db']['pass'] : null;

    return new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
}

;
?>
