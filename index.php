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
        <link href="css/login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>                       
        <?php
        require_once 'functions.php';
        rotear($_SERVER["REQUEST_URI"]);

        function rotear($uri) {

            $paginaRequisitada = (substr($uri, 1)) ? substr($uri, 1) : "home";
            $conn =  getConnection();
            $statement = $conn->prepare("SELECT "
                    . "rou.redirect "
                    . "FROM tb_route AS rou "
                    . "WHERE rou.request = :request");
            $statement->bindParam(':request', $paginaRequisitada, PDO::PARAM_STR);
            $statement->execute();
            $context = $statement->fetch();
            if (!$context) {
                carregarPagina('404.php');
            }
            carregarPagina($context['redirect']);
        }

        function carregarPagina($redirect) {
            require('template/menu.php');
            include $redirect;
            require('template/footer.php');
        }
        ?>     
    </body>
</html>