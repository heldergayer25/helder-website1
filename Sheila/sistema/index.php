<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Acesso</title>
        <?php include './referencias.php';?>
        <script type="text/javascript">
            
        </script>
    </head>
    <body>          
 		<h2>Painel de acesso</h2>
        <form action="./service/logon.php" id="formLogin" name="fornLogin" method="post">
        	<fieldset>
            	<label for="txLogin">Login: <input id="txLogin" name="txLogin" type="text" /></label>                            
                <label for="txSenha">Senha: <input id="txSenha" name="txSenha" type="password" /></label>
            </fieldset>                            
            <div class="clear"></div>
            <br/>                        
            <input type="submit" id="sbEntrar" name="sbEntrar" value="Entrar"  />
        </form>          
        <?php 
        	//mensagem de erro caso login ou senha sejam inválidos
        	if(isset($_GET["error"])) {
        		echo '<h3>Login ou senha inválidos, por favor tente novamente!</h3>';
        	}
        ?>              
    </body>
</html>
