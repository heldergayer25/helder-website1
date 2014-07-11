<?php

/* 
 * Classe de persistência DAO da classe Carro que simula uma qualquer outra classe com suas principais funções
 */

class CarroDAO{
        
    //Construtor vazio da classe, possibilitando instânciar a classe sem nenhum parâmetro
    function __construct() {       
    }

    //Função salvar, que persiste um objeto tipo Carro no banco de dados, passando um Carro como parâmetro
    public function salvar(Carro $carro) { 
        //Tratamento de exceções ao tentar persistir no banco
        try { 
            $sql = "INSERT INTO tb_carro (marca_carro, modelo_carro) VALUES ( :marca, :modelo)"; 
            $p_sql = Conexao::getInstance()->prepare($sql); 
            $p_sql->bindValue(":marca", $carro->getMarca()); 
            $p_sql->bindValue(":modelo", $carro->getModelo()); 
            
            return $p_sql->execute();             
        } catch (PDOException $e) { 
            print "Falha ao salvar carro \n".$e->getMessage(); 
        }         
    }

    //Função deletar, que excluir fisicamente um Carro do banco através da sua id
    public function excluir($id){
        //Bloco de tratamento de exceções caso ocorra algum erro ao persistir o banco
        try { 
            $sql = "DELETE FROM tb_carro WHERE id_carro = :idCarro"; 
            $p_sql = Conexao::getInstance()->prepare($sql); 
            $p_sql->bindValue(":idCarro", $id);             
            
            return $p_sql->execute();             
        } catch (PDOException $e) { 
            print "Falha ao excluir carro \n".$e->getMessage(); 
        }    
    }
    
    //Função pesquisar, que busca no banco um carro conforme sua id
    public function pesquisar($id){        
        $carro = new Carro();
        try { 
            $sql = "SELECT * FROM tb_carro WHERE id_carro = :idCarro"; 
            $p_sql = Conexao::getInstance()->prepare($sql); 
            $p_sql->bindValue(":idCarro", $id);                                   
            $p_sql->execute();            
            
            $linha = $p_sql->fetch(PDO::FETCH_ASSOC);
            $carro->setId($linha['id_carro']);
            $carro->setMarca($linha['marca_carro']);
            $carro->setModelo($linha['modelo_carro']);            
            
        } catch (PDOException $e) { 
            print "Falha ao pesquisar carro \n".$e->getMessage();             
        }    
            return $carro;
    }
    
    //Função para alterar a partir de um objeto carro passado como parâmetro
    public function alterar(Carro $carro){        
        try { 
            $sql = "UPDATE tb_carro SET marca_carro = :marca, modelo_carro = :modelo WHERE id_carro = :idCarro"; 
            $p_sql = Conexao::getInstance()->prepare($sql); 
            $p_sql->bindValue(":idCarro", $carro->getId());                                   
            $p_sql->bindValue(":marca", $carro->getMarca());                                   
            $p_sql->bindValue(":modelo", $carro->getModelo());                                   
            
            return $p_sql->execute();            
        } catch (PDOException $e) { 
            print "Falha ao alterar carro \n".$e->getMessage();             
        }   
    }
    
    //Função para listar todos os elementos de uma objeto no banco, no caso todos os Carros cadastrados
    public function listar(){
        //Instância um array
        $lista = array();
        try { 
            $sql = "SELECT * FROM tb_carro"; 
            $p_sql = Conexao::getInstance()->prepare($sql);             
            $p_sql->execute();                    
            
            //Adiciona todos os resultados da consulta no array
            while($linha = $p_sql->fetch(PDO::FETCH_ASSOC)){
                $carro = new Carro();
                $carro->setId($linha['id_carro']);
                $carro->setMarca($linha['marca_carro']);
                $carro->setModelo($linha['modelo_carro']); 
                
                $lista[] = $carro;
            }            
                //Retorna um array populado
                return $lista;            
        } catch (PDOException $e) { 
            print "Falha ao listar carros \n".$e->getMessage();             
        }                
    }
}