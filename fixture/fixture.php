<?php

include 'connection.php';
try {
    $conn = initializeFixture();
    echo "-------- CRIANDO TABELAS --------\n";

    $conn->exec("CREATE TABLE tb_route("
            . "request VARCHAR(20) NOT NULL,"
            . "redirect VARCHAR(20) NOT NULL,"
            . "PRIMARY KEY(request)"
            . ");");

    echo "-------- INSERIRNDO DADOS --------\n";
    
    $conn->exec("INSERT INTO tb_route VALUES ('home','home.php');");
    $conn->exec("INSERT INTO tb_route VALUES ('empresa','empresa.php');");    
    $conn->exec("INSERT INTO tb_route VALUES ('servicos','servicos.php');");    
    $conn->exec("INSERT INTO tb_route VALUES ('produtos','produtos.php');");
    $conn->exec("INSERT INTO tb_route VALUES ('contato','contato.php');");
    
} catch (Exception $ex) {
    echo "Excessão: $ex->getMessage()\n";
    echo "Excessão: $ex->getTraceAsString()\n";
}