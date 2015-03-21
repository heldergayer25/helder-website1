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
	<div class="post">
		<div class="cabecalho">		
			<?php 
				echo '<h3>Usuário: '.$_SESSION["nome"].'</h3>';

				if(!empty($_GET['salvo'])) {
					echo '<div id="dialog-message" title="Sucesso!">
	 						<span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>
				  			<p>Post salvo com sucesso.</p>
						  </div>';
				}
			?>          
			<a href="./service/logout.php" style="float: right;">Logout</a>
		</div>	 
    	<h2>Novo post</h2>
    	<br/>
    	<br/>
		<form action="./service/novoPost.php" id="formPost" name="formPost" method="post">
			<fieldset>
				<label for="ckAtivo">Ativo <input id="ckAtivo" name="ckAtivo" type="checkbox" checked title="Ativo" value="1" /></label><br/> 
		    	<input id="txData" name="txData" type="text" placeholder="Data postagem" required title="O Post precisa de uma data." />
		        <input id="txTitulo" name="txTitulo" type="text" placeholder="Título" required title="O Post precisa de um título." maxlength="300" /> 
		        <textarea name="editor1" id="editor1"></textarea>		
			    <script type="text/javascript">
					//Replace the <textarea id="editor1"> with a CKEditor
		    		//instance, using default configuration.
		        	CKEDITOR.replace('editor1');	
		        </script>	
            </fieldset>		            
            <input type="submit" value="Salvar" />
        </form> 
        <br/>
        <!--<form action="./service/upload.php" method="post" enctype="multipart/form-data">
	      <input id="imagensPost" name="imagensPost[]" type="file" multiple="multiple" placeholder="Fotos..." />
	      <input type="submit" value="Enviar">
	   	</form>-->
	   	
	</div>    	
		
</body>
</html>
