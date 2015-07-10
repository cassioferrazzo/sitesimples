<div class='container'>
    <article>
        <form method="post" action="confirmacao_envio.php">
            <fieldset id="form_contato">
                <div class="jumbotron"><h1>Entre em contato</h1></div>            
                <div class="form-group">
                    <label for="nome" class="col-sm-1 control-label">Nome:</label>
                    <input type="text" name="nome" outofocus id="nome" class="input-xlarge" required>
                </div>
                <div class="form-group">            
                    <label for="email" class="col-sm-1 control-label">Email:</label>
                    <input type="email" name="email" id="email" class="input-xlarge" required>                    
                </div>
                <div class="form-group">   
                    <label for="assunto" class="col-sm-1 control-label">Assunto:</label>
                    <input type="text" name="assunto" id="assunto" class="input-xlarge" required>                    
                </div>
                <div class="form-group">   
                    <label for="mensagem" class="col-sm-1 control-label">Mensagem:</label>                
                    <textarea name="mensagem" id="mensagem" cols="45" rows="5" required></textarea>  
                </div>
                <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-5">
                        <button type="submit" class="btn btn-default">Enviar</button>  
                        <button type="reset" class="btn btn-default">Cancelar</button>  
                    </div>
                </div>
            </fieldset>        
        </form>  
        <br>
    </article>  
</div>