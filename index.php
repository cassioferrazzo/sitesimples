<?php
date_default_timezone_set('America/Sao_Paulo');
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);
?>
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
        <header>
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
                        <a class="navbar-brand" href="?arquivo=home.php">Site Simples</a>
                    </div> 
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="page-scroll">                                
                                <a href="?arquivo=home.php">Home</a>
                            </li>
                            <li class="page-scroll">
                                <a href="?arquivo=empresa.php">Empresa</a>
                            </li>
                            <li class="page-scroll">
                                <a href="?arquivo=produtos.php">Produtos</a>
                            </li>
                            <li class="page-scroll">
                                <a href="?arquivo=servicos.php">Serviços</a>
                            </li>
                            <li class="page-scroll">
                                <a href="?arquivo=contato.php">Contato</a>
                            </li>                
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">        
            <?php
            $arquivo = $_GET["arquivo"];
            if (file_exists($arquivo)) {
                require($arquivo);
            } else {
                require("home.php");
            }
            ?>    
        </div> 
        <footer>
            <p>&copy; Todos os direitos reservados - <?php echo date("Y"); ?></p>
        </footer>       
    </body>
</html>