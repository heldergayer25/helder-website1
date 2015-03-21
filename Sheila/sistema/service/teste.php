<?php
include_once '../dao/PostDAO.php';
include_once '../pojo/Post.php';

$postDao = new PostDAO();
$post = new Post();

$data = $_POST['txData'];
$titulo = $_POST['txTitulo'];
$texto = $_POST['editor1'];
$ativo = 1;
$excluido = 0;

$post->setAtivo($ativo);
$post->setData($data);
$post->setExcluido($excluido);
$post->setTexto($texto);
$post->setTitulo($titulo);

//$postDao->salvar($post);

$listarPosts[] = new Post();
$listarPosts = $postDao->listar();



for($i = 0, $size = count($listarPosts); $i < $size; ++$i) {	
	echo '<h3>'.$listarPosts[$i]->getData().'</h3>';
	echo '<h1>'.$listarPosts[$i]->getTitulo().'</h1>';
	echo $listarPosts[$i]->getTexto();
	echo '<hr>';
}