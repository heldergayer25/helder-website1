<?php
	/**
	 * Permite restringir o acesso a página somente a usuários logados, caso contrário redireciona para a página de login.
	 */
	session_start();
	//Verifica se já existe sessão para o usuário caso contrário redireciona para página de login
	if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"])) {
		header("location:../index.php");
		exit;
	}	
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar Post</title>
        <?php include '../referencias.php';?>
        <script type="text/javascript">
            
        </script>
    </head>
    <body>
    <?php 
	    echo 'Bem vindo: '.$_SESSION["nome"];
    ?>          
 		<h2>Home</h2>
 		<a href="./logout.php">Logout</a>
 		<br/>
 		<label for="dataPost">Data do Post: <input id="dataPost" type="date" /></label>
 		<br/>
 		<label for="tituloPost">Título: <input id="tituloPost" type="text" /></label>
 		<br/>
 		<label for="textoPost">Texto: <textarea id="textoPost" cols="10" rows="6"></textarea></label>
 		<br/>
 		
 		<form action="./upload.php" method="post" enctype="multipart/form-data">
	      <label for="imagensPost">Fotos: <input id="imagensPost" name="imagensPost[]" type="file" multiple="multiple" /></label>
	      <input type="submit" value="Enviar">
	   </form>
 		
    </body>
</html>
