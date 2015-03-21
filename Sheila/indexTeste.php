<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Desenhando Moda</title>        
        <?php
        $modulo = UrlTeste::getURL( 0 );
 
        if( $modulo == null )
            $modulo = "modulo1";
 
        if( file_exists( "modulos/" . $modulo . ".php" ) )
            require "modulos/" . $modulo . ".php";
        else
            require "modulos/404.php";
        ?>
        <?php 
        	
        	include './referencias.php';
        	
        	        	
        ?>
    </head>
    <body>                
        <div id="fb-root"></div>
        <?php include'./cabecalho.php'?>       
        <div id="section_home"></div>     
            <!--<section class="wrapper">
                <div class="texto" id="novidades">
                <h2>EM BREVE, NOVIDADES NO BLOG! </h2>
            </div>
            </section> -->                   
        <section class="wrapper">                       
            <div class="broche"></div>
            <?php		
//             	include_once '/sistema/conexao/Conexao.php';
//             	include_once '/sistema/service/paginacao.php';
            	include_once '/sistema/dao/PostDAO.php';
            	include_once '/sistema/pojo/Post.php';
            	
            	
            	
				// Número de artigos por página
// 				$artigos_por_pagina = 2;
				
				// Página atual onde vamos começar a mostrar os valores
// 				$pagina_atual = ! empty( $_GET['pagina'] ) ? (int) $_GET['pagina'] : 0;				
// 				$pagina_atual = $pagina_atual * $artigos_por_pagina;
				
// 				$sql = "SELECT * FROM post p WHERE p.ativo = true ORDER BY p.data DESC LIMIT $pagina_atual, $artigos_por_pagina";				
// 				$p_sql = Conexao::getInstance()->prepare($sql);
// 				$p_sql->execute();
				
				
				
				// Mostra os valores
// 				while( $f = $p_sql->fetch() ) {
// 				   echo $f["{$prefixo}titulo"] . '<br>';
// 				}

				// Pegamos o valor total de artigos em uma consulta sem limite
// 				$sql = "SELECT COUNT(*) total FROM post p WHERE p.ativo = true";
// 				$total_artigos = Conexao::getInstance()->prepare($sql);
// 				$total_artigos->execute();
// 				$total_artigos = $total_artigos->fetch();
// 				$total_artigos = $total_artigos['total'];
				
				
				$postDao = new PostDAO();
				$listarPosts[] = new Post();				
				
// 				if($pagina_atual < $total_artigos) {
// 					$listarPosts = $postDao->listarPaginado($pagina_atual, $artigos_por_pagina);
// 				}
					
// 				$size = count($listarPosts);
				$listarPosts = $postDao->listar();
				
// 				if($size == 2) {
				//setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
				//date_default_timezone_set('America/Sao_Paulo');
				//setlocale(LC_ALL,'ptb');
				
					for($i = 0, $size = count($listarPosts); $i < $size; ++$i) {
						echo '<div class="posts-titulo">'
								.'<span>'
								.date('d M',strtotime($listarPosts[$i]->getData()))
								.'<br/>'
										.date('Y',strtotime($listarPosts[$i]->getData()))
										.'</span>'
												.$listarPosts[$i]->getTitulo()
												.'</div>';
						echo '<div class="posts">'
								.$listarPosts[$i]->getTexto()
								.'<div class="rodape-posts"></div>
	            	 			  <div class="fb-like" data-href="http://desenhandomoda.com.br/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true" style="margin-top: 40px;"></div>
	            	 		 </div>
	            			 <div class="fb-comments" data-href="http://desenhandomoda.com.br/" data-numposts="1" data-colorscheme="light" data-width="640"></div>';
					}
// 				}	
				
				
				
				
			?>  
            <div class="posts2">                
                <div class="paginacao-titulo"><p>Posts anteriores</p></div>   
                <div class="paginacao">                                    
                    <ul>                    	
                        <li><a href="index.php">01</a></li>
                        <li><a href="pagina2.php">02</a></li>
                        <li><a href="pagina3.php">03</a></li>
                        <li><a href="pagina4.php">04</a></li>
                        <li><a href="pagina5.php">05</a></li>
                    </ul>                    
                </div>
            </div> 
            
            <?php 
	            // Exibimos a paginação
// 	            echo paginacao($total_artigos, $artigos_por_pagina, 5);
	            
	           
	            
	            
            ?>
            
            
           
            <div class="clear"></div>
        </section>                
        <div id="section_home"></div>
        <?php include './rodape.php';?>
    </body>
</html>


