
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Confirmação de Envio</title>
        <!-- BOOTSTRAP -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"></script>     
    </head>
    <body>
        <div class="container">             
            <h3>Dados enviados com sucesso.</h3> 
            <p>Abaixo seguem os dados que você enviou:</p>
            <p>Nome: <?php echo$_POST['nome']; ?></p>
            <p>Email: <?php echo$_POST['email']; ?></p>
            <p>Assunto: <?php echo$_POST['assunto']; ?></p>
            <p>Mensagem: <?php echo$_POST['mensagem']; ?></p>                       
            <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-5">
                    <a href="home">VOLTAR</a>
                </div>
            </div>
        </div>  
    </body>
</html>
