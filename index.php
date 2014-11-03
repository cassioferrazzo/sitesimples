<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <title>Site Simples</title>
    </head>
    <body>
        <header id="cabecalho">
            <h1>Site Simples</h1>
            <nav>
                <ul>
                    <li><a href="?arquivo=home.php">Home</a></li>
                    <li><a href="?arquivo=empresa.php">Empresa</a></li>
                    <li><a href="?arquivo=produtos.php">Produtos</a></li>
                    <li><a href="?arquivo=servicos.php">Serviços</a></li>
                    <li><a href="?arquivo=contato.php">Contato</a></li>
                </ul>
            </nav>               
        </header> 
        <?php
        $arquivo = $_GET["arquivo"];
        if(file_exists($arquivo)){
            require($arquivo);  
        }else{
            require("home.php");    
        }
        ?>                    
        <footer id="rodape">
            <p>&copy; Todos os direitos reservados - <?php echo date("Y"); ?></p>
        </footer>
    </body>
</html>