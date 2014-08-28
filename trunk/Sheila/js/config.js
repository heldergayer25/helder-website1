/*
 * Copyright (c) 2013.
 * Produzido por Helder Weber Gayer
 * heldergayer@hotmail.com
 *
 * @version 1.0
 */
        
	//Funções executadas ao iniciar a página                       
	$(function(){		
                        
		//Validação dos campos do formulário de contato
		$("#formContato").validate({
			rules: {
				txNome: "required",
                                txEmail: {
                                    required: true,
                                    email: true
                                },
                                txTelefone: "required",
                                slAssunto: "required",
                                txDescricao: {
                                    required:true,
                                    minlength: 5
                                }
			},
			messages: {
				txNome: "Informe um nome para contato",
                                txEmail: "Informe um e-mail válido",
                                txTelefone: "Informe um telefone para contato",
                                slAssunto: "Escolha um assunto",
                                txDescricao: "Escreva uma mensagem"
			}
		});

                
		//Cufon('header nav#menu ul li a', { fontFamily: 'Daisy Script'});   
                Cufon('footer address, footer p', { fontFamily: 'Open Sans'});   
                //Cufon('div.texto', { fontFamily: 'Josefin Sans'});   
                //Cufon('div.texto h3', { fontFamily: 'Josefin Sans Semi Bold'});   
                 
                Cufon('header nav#menu ul li a', { hover: {color: '#E9556A'},fontFamily: 'Indie Flower'}); 
            
            
            //.galeria a.fancybox-effects-c img
                // * Para a Home, quando tÃªm mais de 3 colunas de articles, tira a margin-right!
		$("header nav#menu ul li").each(function(index){
			var multiploTres = (index+1) % 6;
			if(multiploTres == 0)
			{
				$(this).css("margin-right","0");
			}
		});
                
                $(".galeria a.fancybox-effects-a img, .galeria a.fancybox-effects-b img, .galeria a.fancybox-effects-c img, .galeria a.fancybox-effects-d img, .galeria a.fancybox-buttons img, .galeria a.fancybox-thumbs img").each(function(index){
			var multiploTres = (index+1) % 4;
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
                
                /*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


	
                
	});