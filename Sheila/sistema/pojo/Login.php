<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Login{
    
    private $id;
    private $login;
    private $senha;
    private $nome;
    
    function __construct() {        
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
    	$this->login = $login;
    }
    
    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }    
    
    public function getNome() {
    	return $this->nome;
    }
    
    public function setNome($nome) {
    	$this->nome = $nome;
    }
    
}
