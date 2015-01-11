<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema Desenhando Moda</title>
        <?php include './referencias.php'; ?>
    </head>
    <body>
        <div id="login">
            <form action="/" id="/" name="" method="post">                                            
                <fieldset>                                        
                    <label for="txNome">Login: <input id="txNome" name="txNome" type="text" /></label>                            
                    <label for="txEmail">Senha: <input id="txEmail" name="txEmail" type="password" /></label>
                </fieldset>                                            
                <br/>                        
                <input type="submit" id="sbEnviar" name="sbEnviar" value="Enviar"  />                    
            </form>                    
        </div>       
    </body>
</html>
