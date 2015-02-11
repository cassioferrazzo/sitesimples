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
            $peginaRequisitada = substr($uri, 1);
            $rotas['home'] = 'home.php';
            $rotas['contato'] = 'contato.php';
            $rotas['produtos'] = 'produtos.php';
            $rotas['servicos'] = 'servicos.php';
            $rotas['empresa'] = 'empresa.php';
            
            if (!$peginaRequisitada) {
                carregarPagina('home.php');
            }
            if (array_key_exists($peginaRequisitada, $rotas)) {
                carregarPagina($rotas[$peginaRequisitada]);
            }
            carregarPagina('404.php');
        }

        function carregarPagina($arquivo) {
            require('template/menu.php');
            require($arquivo);           
            require('template/footer.php');
            die();
        }
        ?>     
    </body>
</html>