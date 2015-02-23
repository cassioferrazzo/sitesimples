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
        date_default_timezone_set('America/Sao_Paulo');
        ini_set('display_errors', true);
        error_reporting(E_ALL | E_STRICT);
        rotear($_SERVER["REQUEST_URI"]);

        function rotear($uri) {

            $paginaRequisitada = (substr($uri, 1)) ? substr($uri, 1) : "home";
            $conn = include 'dataAcess.php';
            $statement = $conn->prepare("SELECT "
                    . "rou.tittle, cont.content "
                    . "FROM tb_route AS rou "
                    . "JOIN tb_content AS cont "
                    . "ON rou.content = cont.id_content "
                    . "WHERE rou.request = :request");
            $statement->bindParam(':request', $paginaRequisitada, PDO::PARAM_STR);
            $statement->execute();
            $context = $statement->fetch();
            if (!isset($context)) {
                $context = array(
                    'tittle' => 'ERRO - 404',
                    'content' => 'Desculpe mas houve algum problema, não conseguimos carregar a página solicitada.');
                carregarPagina($context);
                http_response_code(404);
                die();
            }
            carregarPagina($context);
        }

        function carregarPagina($arrayContext) {
            $tittle = $arrayContext['tittle'];
            $content = $arrayContext['content'];
            require('template/menu.php');
            echo ("<div class='container'>
                        <article>
                            <header>
                                 <div class='jumbotron'><h1>$tittle</h1></div>
                            </header>
                            <p>");
            echo $content;
            echo ("
                            </p>   
                        </article>  
                   </div>");
            require('template/footer.php');
        }
        ?>     
    </body>
</html>