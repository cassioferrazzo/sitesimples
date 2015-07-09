<?php

function initializeFixture() {
    try {

        $dbInfo = include 'db_data.php';
        if (!isset($dbInfo['db'])) {
            throw Exception("Informações sobre o Banco de dados não foram setadas");
        }

        $host = (isset($dbInfo['db']['host'])) ? $dbInfo['db']['host'] : null;
        $dbname = (isset($dbInfo['db']['dbname'])) ? $dbInfo['db']['dbname'] : null;
        $user = (isset($dbInfo['db']['user'])) ? $dbInfo['db']['user'] : null;
        $pass = (isset($dbInfo['db']['pass'])) ? $dbInfo['db']['pass'] : null;


        $conn = new PDO("mysql:host={$host}", $user, $pass);
        $conn->exec("DROP DATABASE IF EXISTS $dbname");
        $conn->exec("CREATE DATABASE $dbname");
        $conn->exec("USE $dbname"); 
        return $conn;
    } catch (Exception $ex) {

        echo "Excessão: $ex->getMessage()\n";
        echo "Excessão: $ex->getTraceAsString()\n";
    }
}
