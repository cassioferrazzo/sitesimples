<?php date_default_timezone_set('America/Sao_Paulo'); ?>
<footer>
    <p>&copy; Todos os direitos reservados - <?php echo date("Y"); ?></p>
    <?php
    if (key_exists('logado', $_SESSION)) {
        if ($_SESSION['logado']) {
            echo '
                    <form class="form-inline"  method="get" action="sair">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>                    
                        </button>
                    </form>';
        } 
    }else {
            echo '
                    <form class="form-inline"  method="get" action="entrar">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>                    
                        </button>
                    </form>';
        }
    ?>
</footer>
