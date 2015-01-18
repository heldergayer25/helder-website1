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
        <title>Home</title>
        <?php include 'referencias.php';?>
        <script type="text/javascript">
            
        </script>
    </head>
    <body>
    <?php 
	    echo 'Bem vindo: '.$_SESSION["nome"];
    ?>          
 		<h2>Home</h2>
 		<a href="service/logout.php">Logout</a>
    </body>
</html>
