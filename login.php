<div class="container">
    <article>
        <form class="form-signin" method="post" action="autenticar.php">
            <h2 class="form-signin-heading">Area Restrita</h2>
            <label for="login" class="sr-only">Login</label>
            <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuário" required autofocus>
            <label for="senha" class="sr-only">Senha</label>
            <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>            
            <?php
            if (key_exists('logado', $_SESSION)) {
                if (!$_SESSION['logado']) {
                    echo '<spam class="lavel label-danger">Login inválido</spam>';
                    unset($_SESSION['logado']);
                }
            }            
            ?>
            <button class="btn btn-lg btn-block" type="submit">Entrar</button>

            <p>Edição de conteúdos</p>
            <br><br>
        </form>

    </article>
</div> 