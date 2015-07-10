<div class='container'>
    <article>
        <header>
            <div class='jumbotron'><h1>Serviços</h1></div>
        </header>
        <p>            
            <?php
            require_once'functions.php';
            echo getContent(substr($_SERVER["REQUEST_URI"], 1));
            ?>
        </p>   
    </article>  
</div>