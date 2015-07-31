<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Site Simples</title>
        <!-- BOOTSTRAP -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"></script> 

        <!-- PERSONALIZADO -->        
        <link href="css/padrao.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        require('template/menu.php');
        ?>
        <div class="container">    
            <article>
                <header>
                    <div class='jumbotron'><h1>Resultados da busca</h1></div>
                </header>
                <p>
                    <?php
                    $conteudoBuscar = utf8_encode($_POST['buscar']);
                    require_once'functions.php';
                    $conn = getConnection();
                    $statement = $conn->prepare("SELECT "
                            . "request, content "
                            . "FROM tb_content "
                            . "WHERE content LIKE :findText");
                    $conteudoBuscar = "%" . $conteudoBuscar . "%";
                    $statement->bindParam(':findText', $conteudoBuscar, PDO::PARAM_STR);
                    $statement->execute();
                    $context = $statement->fetchAll();

                    if (isset($context)) {

                        foreach ($context as $request)
                        {
                            echo "<a href=".$request['request'].">".$request['request']."</a><br>";                 
                        }
                    }else{
                        echo'Nenhum resultado.';
                    }
                    ?>
                </p>   
            </article>                                   
        </div> 
        <?php require('template/footer.php'); ?>        
    </body>
</html>
