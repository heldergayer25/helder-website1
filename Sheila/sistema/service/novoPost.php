<?php
header ('Content-type: text/html; charset=UTF-8');
/**
 * Responsável por salvar um novo post no banco de dados
 */
include_once '../dao/PostDAO.php';
include_once '../pojo/Post.php';

$postDao = new PostDAO();
$post = new Post();

$data = $_POST['txData'];
$titulo = $_POST['txTitulo'];
$texto = $_POST['editor1'];
if(isset($_POST['ckAtivo'])) {
	$ativo = $_POST['ckAtivo'];
} else {
	$ativo = 0;
}

$excluido = 0;

$post->setAtivo($ativo);

$date1 = str_replace("/","-",$data);
$post->setData(date('Y-m-d',strtotime($date1)));
$post->setExcluido($excluido);
$post->setTexto($texto);
$post->setTitulo($titulo);

$postDao->salvar($post);

header('location:../home.php?salvo=true');

?>

