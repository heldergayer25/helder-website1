<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Post{
    
    private $id;
    private $data;
    private $titulo;
    private $texto;
    private $ativo;
    private $excluido;
    
    function __construct() {        
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getData() {
    	return $this->data;
    }
    
    public function setData($data) {
    	$this->data = $data;
    }
    
    public function getTitulo() {
    	return $this->titulo;
    }
    
    public function setTitulo($titulo) {
    	$this->titulo = $titulo;
    }
        
    public function getTexto() {
    	return $this->texto;
    }
    
    public function setTexto($texto) {
    	$this->texto = $texto;
    }
    
    public function getAtivo() {
    	return $this->ativo;
    }
    
    public function setAtivo($ativo) {
    	$this->ativo = $ativo;
    }
    
    public function getExcluido() {
    	return $this->excluido;
    }
    
    public function setExcluido($excluido) {
    	$this->excluido = $excluido;
    }
    
}
