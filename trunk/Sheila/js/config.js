/*
 * Copyright (c) 2013.
 * Produzido por Helder Weber Gayer
 * heldergayer@hotmail.com
 *
 * @version 1.0
 */
        
	//Funções executadas ao iniciar a página
        
        
        //Fontes adicionadas 
	$(function(){		
		//Cufon('header nav#menu ul li a', { fontFamily: 'Daisy Script'});   
                Cufon('footer address, footer p', { fontFamily: 'Open Sans'});   
                Cufon('div.texto', { fontFamily: 'Josefin Sans'});   
                Cufon('div.texto h3', { fontFamily: 'Josefin Sans Semi Bold'});   
                Cufon('header nav#menu ul li a', { hover: {color: '#E9556A'},fontFamily: 'Indie Flower'}); 
            
                // * Para a Home, quando tÃªm mais de 3 colunas de articles, tira a margin-right!
		$("header nav#menu ul li").each(function(index){
			var multiploTres = (index+1) % 6;
			if(multiploTres == 0)
			{
				$(this).css("margin-right","0");
			}
		});
               
               // Efeito portfólio                
                $('.thumbs').portfolio({
                    cols: 4,
                    transition: 'slideDown'     
                    
                    //opções de transição:
                    //slideDown = ("show")
                    //slideUp = ("hide")
                    //slideToggle = ("toggle")
                    //fadeIn = "show"}
                    //fadeOut = "hide"
                    //fadeToggle = "toggle"
                });                               
                
                $(".yoxview").yoxview();                        
           
                
	});