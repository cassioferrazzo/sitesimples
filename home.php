<div class='container'>
    <article>
        <header>
            <div class='jumbotron'><h1>Home</h1></div>
        </header>
        <p>
            <?php
            require_once'functions.php';
            $logado = key_exists('logado', $_SESSION) ? $_SESSION['logado'] : false;
            if ($logado) {
                $_SESSION['request'] = substr($_SERVER["REQUEST_URI"], 1);
                require_once 'editor_header.php';
            }
            echo getContent(substr($_SERVER["REQUEST_URI"], 1));
            if ($logado) {
                require_once 'editor_footer.php';
            }
            ?>
        </p>   
    </article>  
</div>