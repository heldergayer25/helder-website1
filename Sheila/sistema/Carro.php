<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Carro{
    
    private $id;
    private $marca;
    private $modelo;
    
    function __construct() {        
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    
    function salvar(Carro $carro){
        echo 'Salvo no banco: '.$carro->getMarca().'  '.$carro->getModelo();
    }
}
