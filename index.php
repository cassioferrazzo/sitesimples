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
            echo getMenu();
            echo '<div class="container">';
            require($arquivo);
            echo '</div>';
            die(getRodape());
        }

        function getMenu() {
            $menuStr = '<header>
                            <nav class="navbar navbar-default navbar-fixed-top">
                                <div class="container">
                                    <div class=" navbar-header page-scroll">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>                        
                                        </button>
                                        <a class="navbar-brand" href="home">Site Simples</a>
                                    </div> 
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="page-scroll">                                
                                                <a href="home">Home</a>
                                            </li>
                                            <li class="page-scroll">
                                                <a href="empresa">Empresa</a>
                                            </li>
                                            <li class="page-scroll">
                                                <a href="produtos">Produtos</a>
                                            </li>
                                            <li class="page-scroll">
                                                <a href="servicos">Serviços</a>
                                            </li>
                                            <li class="page-scroll">
                                                <a href="contato">Contato</a>
                                            </li>                
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </header>';
            return $menuStr;
        }

        function getRodape() {
            $footerStr = '<footer>
                            <p>&copy; Todos os direitos reservados - <?php echo date("Y"); ?></p>
                          </footer>';

            return $footerStr;
        }
        ?>     
    </body>
</html>