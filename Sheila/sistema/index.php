<!DOCTYPE html>
<!--
Tela inicial de login para acesso ao sistema.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Acesso</title>
        <?php include './referencias.php';?>        
    </head>
    <body>          
    	<section class="wrapper">
    		<h2>Painel de acesso</h2>
    		<div class="login">
		        <form action="./service/logon.php" id="formLogin" name="fornLogin" method="post">
		        	<fieldset>
		            	<input id="txLogin" name="txLogin" type="text" placeholder="Login" />
		                <input id="txSenha" name="txSenha" type="password" placeholder="Senha" />
		            </fieldset>
		            <br/>                        
		            <input type="submit" id="sbEntrar" name="sbEntrar" value="Entrar"  />
		        </form>          
		        <?php 
		        	//mensagem de erro caso login ou senha sejam inválidos
		        	if(isset($_GET["error"])) {
		        		echo '<h3>Login ou senha inválidos, por favor tente novamente!</h3>';
		        	}
		        ?>
		    </div>    		    
		</section>                     
    </body>
</html>
