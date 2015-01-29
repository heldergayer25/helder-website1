<?php
	/**
	 * Permite restringir o acesso a página somente a usuários logados, caso contrário redireciona para a página de login.
	 */
	session_start();
	//Verifica se já existe sessão para o usuário caso contrário redireciona para página de login
	if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"])) {
		header("location:./index.php");
		exit;
	}	
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <?php include './referencias.php';?>
        
    </head>
    <body>
    <?php 
	    echo '<h3>Bem vindo: '.$_SESSION["nome"].'</h3>';
    ?>          
    
    	<h2>Novo post</h2>
    		<div class="login">
		        <form action="./service/teste.php" id="formPost" name="formPost" method="post">
		        	<fieldset>
		        		<input id="txData" name="txData" type="date" placeholder="Data postagem" />
		            	<input id="txTitulo" name="txTitulo" type="text" placeholder="Título" />
		            	 <textarea name="editor1" id="editor1" rows="10" cols="80">
			                This is my textarea to be replaced with CKEditor.
			            </textarea>		
			            <script type="text/javascript">
						    //Replace the <textarea id="editor1"> with a CKEditor
				    	    //instance, using default configuration.
				        	CKEDITOR.replace('editor1');				        			
				        </script>	
		            </fieldset>		            
		            <input type="submit" value="Salvar">
		        </form> 
		        <br/>
		        <!--<form action="./service/upload.php" method="post" enctype="multipart/form-data">
			      <input id="imagensPost" name="imagensPost[]" type="file" multiple="multiple" placeholder="Fotos..." />
			      <input type="submit" value="Enviar">
			   </form>-->
    		</div>    		    
	         
 		<h2>Home</h2>
 		<a href="./service/logout.php">Logout</a>
    </body>
</html>
