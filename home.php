<div class='container'>
    <article>
        <header>
            <div class='jumbotron'><h1>Home</h1></div>
        </header>
        <p>
            <?php
            require_once'functions.php';
            echo getContent('home');
            ?>
        </p>   
    </article>  
</div>