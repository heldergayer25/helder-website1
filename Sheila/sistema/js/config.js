/*
 * Copyright (c) 2013.
 * Produzido por Helder Weber Gayer
 * heldergayer@hotmail.com
 *
 * @version 1.0
 */
        
	//Funções executadas ao iniciar a página                       
	$(function(){	
		
		//calendário
		$('#txData').datepicker({		    
			
		})
		
		//modal de dialog de mensagem		
		$(function() {
			$( "#dialog-message" ).dialog({
				modal: true,
				buttons: {
					Ok: function() {
						$( this ).dialog( "close" );
					}
				}
			});
		});
		
		
		//configuração para calendário brasileiro
		(function( factory ) {
			if ( typeof define === "function" && define.amd ) {

				// AMD. Register as an anonymous module.
				define([ "../datepicker" ], factory );
			} else {

				// Browser globals
				factory( jQuery.datepicker );
			}
		}(function( datepicker ) {

			datepicker.regional['pt-BR'] = {
				closeText: 'Fechar',
				prevText: '&#x3C;Anterior',
				nextText: 'Próximo&#x3E;',
				currentText: 'Hoje',
				monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho',
				'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
				monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun',
				'Jul','Ago','Set','Out','Nov','Dez'],
				dayNames: ['Domingo','Segunda-feira','Terça-feira','Quarta-feira','Quinta-feira','Sexta-feira','Sábado'],
				dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb'],
				dayNamesMin: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb'],
				weekHeader: 'Sm',
				dateFormat: 'dd/mm/yy',
				firstDay: 0,
				isRTL: false,
				showMonthAfterYear: false,				
				yearSuffix: ''};
			datepicker.setDefaults(datepicker.regional['pt-BR']);
	
			return datepicker.regional['pt-BR'];

		}));
	
		
		
		
		
        //Facebook
//        $(function(d, s, id) {
//          var js, fjs = d.getElementsByTagName(s)[0];
//          if (d.getElementById(id)) return;
//          js = d.createElement(s); js.id = id;
//          js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
//          fjs.parentNode.insertBefore(js, fjs);
//        }(document, 'script', 'facebook-jssdk'));
                        
                        
                        
		//Validação dos campos do formulário de contato
//		$("#formContato").validate({
//			rules: {
//				txNome: "required",
//                                txEmail: {
//                                    required: true,
//                                    email: true
//                                },
//                                txTelefone: "required",
//                                slAssunto: "required",
//                                txDescricao: {
//                                    required:true,
//                                    minlength: 5
//                                }
//			},
//			messages: {
//				txNome: "Informe um nome para contato",
//                                txEmail: "Informe um e-mail válido",
//                                txTelefone: "Informe um telefone para contato",
//                                slAssunto: "Escolha um assunto",
//                                txDescricao: "Escreva uma mensagem"
//			}
//		});

                
//		//Cufon('header nav#menu ul li a', { fontFamily: 'Daisy Script'});   
//        Cufon('footer address, footer p', { fontFamily: 'Open Sans'});   
//        //Cufon('div.texto', { fontFamily: 'Josefin Sans'});   
//        //Cufon('div.texto h3', { fontFamily: 'Josefin Sans Semi Bold'});   
//         
//        Cufon('header nav#menu ul li a', { hover: {color: '#E9556A'},fontFamily: 'Indie Flower'}); 
            
            
		
                
	});