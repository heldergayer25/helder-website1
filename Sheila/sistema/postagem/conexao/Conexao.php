<?php

/* 
 * Classe que realiza a conexão com o banco de dados implementando o módulo
 * PDO e utilizando a tag self:: garante que apenas 1 conexão será realizada
 * em todo o sistema
 */

class Conexao{
    
    //Atributo estático de conexão com o banco
    public static $conexao;     

    //Construtor da classe Conexao
    private function __construct() { 
    } 

    //Método que abre a conexão com o banco de dados, este que no caso é o MySQL
    public static function getInstance() { 
        //Tratamento de exceções para realizar a conexão
        try{
            //Verifica se a conexão já existe
            if (!isset(self::$conexao)) { 
            	//self::$conexao = new PDO("mysql:host=localhost;dbname=u687419513_banco", "u687419513_user1", "frk4TdURva", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                self::$conexao = new PDO("mysql:host=localhost;dbname=desenhandomoda", "root", "admin", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); 
                //self::$conexao = new PDO('mysql:host=localhost;dbname=php', 'root', 'admin', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); 
                self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                self::$conexao->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING); 
            }
                //Se a conexão for efetivada retorna o parâmetro da conexão aberta
                return self::$conexao;     
        }catch (Exception $ex) {
            //Em caso de erro ou falha na conexão com o banco a mensagem de erro será apresentada
            print "Falha na conexão com o banco de dados. \n Erro: ".$ex->getMessage();
        }   
    }
}


    
    
    
