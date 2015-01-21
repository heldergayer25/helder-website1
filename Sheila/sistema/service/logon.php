<?php
/**
 * Valida o login e senha do usuário e caso true seta os valores na sessão.
 */	
	include_once '../dao/LoginDAO.php'; 
	include_once '../pojo/Login.php';
	
	//inicia sessão
	session_start();
	
	//pega os valores do login e senha do formulário 
	$login = $_POST['txLogin'];
	$senha = $_POST['txSenha'];
	
	//instância a DAO da classe Login
	$loginDao = new LoginDAO();
	
	//instância um novo Login 
	$usuario = new Login();
	//busca dados do usuário do BD conforme login e senha 
	$usuario = $loginDao->logar($login, $senha); 
	
	//se o usuário for encontrado seta os valores na sessão e redireciona para página principal
	//caso contrário redireciona para página de login		
	if($usuario->getId() != null) { 
		$_SESSION['login'] = $usuario->getLogin(); 
		$_SESSION['senha'] = $usuario->getSenha();
		$_SESSION['nome'] = $usuario->getNome();
		
		header('location:../home.php'); 
	} else { 
		unset ($_SESSION['login']); 
		unset ($_SESSION['senha']); 
		unset ($_SESSION['nome']);

		//passa valor via url indicando o erro no login
		header('location:../index.php?error'); 		
	}	
	
?>