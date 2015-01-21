<?php
include_once '../conexao/Conexao.php';
/* 
 * Classe de persistência DAO da classe Carro que simula uma qualquer outra classe com suas principais funções
 */

class LoginDAO{
        
    //Construtor vazio da classe, possibilitando instânciar a classe sem nenhum parâmetro
    function __construct() {       
    }

    //Função salvar, que persiste um objeto tipo Carro no banco de dados, passando um Carro como parâmetro
    public function salvar(Login $login) { 
        //Tratamento de exceções ao tentar persistir no banco
        try { 
            $sql = "INSERT INTO login (login, senha, nome) VALUES ( :login, :senha, :nome)"; 
            $p_sql = Conexao::getInstance()->prepare($sql); 
            $p_sql->bindValue(":login", $login->getLogin()); 
            $p_sql->bindValue(":senha", $login->getSenha());
            $p_sql->bindValue(":nome", $login->getNome());
            
            return $p_sql->execute();             
        } catch (PDOException $e) { 
            print "Falha ao salvar login \n".$e->getMessage(); 
        }         
    }

    //Função deletar, que excluir fisicamente um Carro do banco através da sua id
    public function excluir($id){
        //Bloco de tratamento de exceções caso ocorra algum erro ao persistir o banco
        try { 
            $sql = "DELETE FROM login WHERE id = :id"; 
            $p_sql = Conexao::getInstance()->prepare($sql); 
            $p_sql->bindValue(":id", $id);             
            
            return $p_sql->execute();             
        } catch (PDOException $e) { 
            print "Falha ao excluir login \n".$e->getMessage(); 
        }    
    }
    
    //Função pesquisar, que busca no banco um carro conforme sua id
    public function pesquisar($id){        
        $login = new Login();
        try { 
            $sql = "SELECT * FROM login WHERE id = :id"; 
            $p_sql = Conexao::getInstance()->prepare($sql); 
            $p_sql->bindValue(":id", $id);                                   
            $p_sql->execute();            
            
            $linha = $p_sql->fetch(PDO::FETCH_ASSOC);
            $login->setId($linha['id']);
            $login->setLogin($linha['login']);
            $login->setSenha($linha['senha']);
            $login->setNome($linha['nome']);
            
        } catch (PDOException $e) { 
            print "Falha ao pesquisar login \n".$e->getMessage();             
        }    
            return $login;
    }
    
    //Função para alterar a partir de um objeto carro passado como parâmetro
    public function alterar(Login $login){        
        try { 
            $sql = "UPDATE login SET login = :login, senha = :senha, nome = :nome WHERE id = :id"; 
            $p_sql = Conexao::getInstance()->prepare($sql); 
            $p_sql->bindValue(":id", $login->getId());                                   
            $p_sql->bindValue(":login", $login->getLogin());                                   
            $p_sql->bindValue(":senha", $login->getSenha());                                   
            $p_sql->bindValue(":nome", $login->getNome());
            
            return $p_sql->execute();            
        } catch (PDOException $e) { 
            print "Falha ao alterar login \n".$e->getMessage();             
        }   
    }
    
    //Função para listar todos os elementos de uma objeto no banco, no caso todos os Carros cadastrados
    public function listar(){
        //Instância um array
        $lista = array();
        try { 
            $sql = "SELECT * FROM login"; 
            $p_sql = Conexao::getInstance()->prepare($sql);             
            $p_sql->execute();                    
            
            //Adiciona todos os resultados da consulta no array
            while($linha = $p_sql->fetch(PDO::FETCH_ASSOC)){
                $login = new Login();
                $login->setId($linha['id']);
                $login->setLogin($linha['login']);
                $login->setSenha($linha['senha']);
                $login->setNome($linha['nome']);
                
                $lista[] = $login;
            }            
                //Retorna um array populado
                return $lista;            
        } catch (PDOException $e) { 
            print "Falha ao listar logins \n".$e->getMessage();             
        }                
    }
    
    /**
     * Valida login e senha de usuário no banco de dados
     *  
     * @param unknown $login do usuário
     * @param unknown $senha do usuário
     * @return Login
     */    
    public function logar($login, $senha){
    	$criptografia = md5($senha);
    	
    	$log = new Login();
    	try {
    		$sql = "SELECT * FROM login WHERE login = :login AND senha = :senha";
    		$p_sql = Conexao::getInstance()->prepare($sql);
    		$p_sql->bindValue(":login", $login);
    		$p_sql->bindValue(":senha", $criptografia);
    		$p_sql->execute();
    
    		$linha = $p_sql->fetch(PDO::FETCH_ASSOC);
    		$log->setId($linha['id']);
    		$log->setLogin($linha['login']);
    		$log->setSenha($linha['senha']);
    		$log->setNome($linha['nome']);
    
    	} catch (PDOException $e) {
    		print "Falha ao pesquisar login \n".$e->getMessage();
    	}
    	return $log;
    }    
    
}