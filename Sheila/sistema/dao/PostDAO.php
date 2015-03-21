<?php
include_once '/../conexao/Conexao.php';
/* 
 * Classe de persistência DAO da classe Carro que simula uma qualquer outra classe com suas principais funções
 */

class PostDAO{
        
    //Construtor vazio da classe, possibilitando instânciar a classe sem nenhum parâmetro
    function __construct() {       
    }

    //Função salvar, que persiste um objeto tipo Carro no banco de dados, passando um Carro como parâmetro
    public function salvar(Post $post) { 
        //Tratamento de exceções ao tentar persistir no banco
        try { 
            $sql = "INSERT INTO post (data, titulo, texto, ativo, excluido) VALUES ( :data, :titulo, :texto, :ativo, :excluido)"; 
            $p_sql = Conexao::getInstance()->prepare($sql); 
            $p_sql->bindValue(":data", $post->getData()); 
            $p_sql->bindValue(":titulo", $post->getTitulo());
            $p_sql->bindValue(":texto", $post->getTexto());
            $p_sql->bindValue(":ativo", $post->getAtivo());
            $p_sql->bindValue(":excluido", $post->getExcluido());
            
            return $p_sql->execute();             
        } catch (PDOException $e) { 
            print "Falha ao salvar post \n".$e->getMessage(); 
        }         
    }

    //Função deletar, que excluir fisicamente um Carro do banco através da sua id
    public function excluir($id){
        //Bloco de tratamento de exceções caso ocorra algum erro ao persistir o banco
        try { 
            $sql = "DELETE FROM post WHERE id = :id"; 
            $p_sql = Conexao::getInstance()->prepare($sql); 
            $p_sql->bindValue(":id", $id);             
            
            return $p_sql->execute();             
        } catch (PDOException $e) { 
            print "Falha ao excluir post \n".$e->getMessage(); 
        }    
    }
    
    //Função pesquisar, que busca no banco um carro conforme sua id
    public function pesquisar($id){        
        $post = new Post();
        try { 
            $sql = "SELECT * FROM post WHERE id = :id"; 
            $p_sql = Conexao::getInstance()->prepare($sql); 
            $p_sql->bindValue(":id", $id);                                   
            $p_sql->execute();            
            
            $linha = $p_sql->fetch(PDO::FETCH_ASSOC);
            $post->setId($linha['id']);
            $post->setData($linha['data']);
            $post->setTitulo($linha['titulo']);
            $post->setTexto($linha['texto']);
            $post->setAtivo($linha['ativo']);
            $post->setExcluido($linha['excluido']);
            
        } catch (PDOException $e) { 
            print "Falha ao pesquisar post \n".$e->getMessage();             
        }    
            return $post;
    }
    
    //Função para alterar a partir de um objeto carro passado como parâmetro
    public function alterar(Post $post){        
        try { 
            $sql = "UPDATE post SET data = :data, titulo = :titulo, texto = :texto, ativo = :ativo, excluido = :excluiso WHERE id = :id"; 
            $p_sql = Conexao::getInstance()->prepare($sql); 
            $p_sql->bindValue(":id", $post->getId());                                   
            $p_sql->bindValue(":data", $post->getData());                                   
            $p_sql->bindValue(":titulo", $post->getTitulo());                                   
            $p_sql->bindValue(":texto", $post->getTexto());
            $p_sql->bindValue(":ativo", $post->getAtivo());
            $p_sql->bindValue(":excluido", $post->getExcluido());
            
            return $p_sql->execute();            
        } catch (PDOException $e) { 
            print "Falha ao alterar post \n".$e->getMessage();             
        }   
    }
    
    //Função para listar todos os elementos de uma objeto no banco, no caso todos os Carros cadastrados
    public function listar(){
        //Instância um array
        $post = array();
        try { 
            $sql = "SELECT * FROM post p WHERE p.excluido = false AND p.ativo = true ORDER BY data DESC"; 
            $p_sql = Conexao::getInstance()->prepare($sql);             
            $p_sql->execute();                    
            
            //Adiciona todos os resultados da consulta no array
            while($linha = $p_sql->fetch(PDO::FETCH_ASSOC)){
                $post = new Post();
                $post->setId($linha['id']);
                $post->setData($linha['data']);
                $post->setTitulo($linha['titulo']);
                $post->setTexto($linha['texto']);
                $post->setAtivo($linha['ativo']);
                $post->setExcluido($linha['excluido']);
                
                $lista[] = $post;
            }            
                //Retorna um array populado
                return $lista;            
        } catch (PDOException $e) { 
            print "Falha ao listar posts \n".$e->getMessage();             
        }                
    }
    
    //Função para listar todos os elementos de uma objeto no banco, no caso todos os Carros cadastrados
    public function listarPaginado($pagina_atual, $artigos_por_pagina){
    	//Instância um array
    	$post = array();
    	try {
    		$sql = "SELECT * FROM post p WHERE p.ativo = true ORDER BY p.data DESC LIMIT $pagina_atual, $artigos_por_pagina";
			$p_sql = Conexao::getInstance()->prepare($sql);
			$p_sql->execute();
    
    		//Adiciona todos os resultados da consulta no array
    		while($linha = $p_sql->fetch(PDO::FETCH_ASSOC)){
    			$post = new Post();
    			$post->setId($linha['id']);
    			$post->setData($linha['data']);
    			$post->setTitulo($linha['titulo']);
    			$post->setTexto($linha['texto']);
    			$post->setAtivo($linha['ativo']);
    			$post->setExcluido($linha['excluido']);
    
    			$lista[] = $post;
    		}
    		//Retorna um array populado
    		return $lista;
    	} catch (PDOException $e) {
    		print "Falha ao listar posts \n".$e->getMessage();
    	}
    }
    
    
}