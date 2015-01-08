<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contato</title>
        <?php include './referencias.php';?>
        <script type="text/javascript">
            var RecaptchaOptions = {                
               //Temas 
               //'red' | 'white' | 'blackglass' | 'clean' | 'custom'
               theme : 'blackglass',               
               //linguagem
               lang : 'pt'
            };
        </script>
    </head>
    <body>                
        <?php include'./cabecalho.php'?>       
        <div id="section_home"></div>    
        <div id="fundoContato">
            <section class="wrapper">  
                <div class="texto">
                    <h2>Contato</h2>
                    <p style="line-height: 20px;">Se está interessado(a) no meu trabalho ou tem dúvidas, sinta-se à vontade para me contactar, através do e-mail abaixo:</p>
                    <br/><br/><br/><br/><br/>
                    <p style="font-weight: bold; font-size: 20px;">blogdesenhandomoda@hotmail.com.br</p>
                    <!--<form action="sistema/phpmailer/email-old.php" id="formContato" name="formContato" method="post">                                            
                        <fieldset>                        
                            <label id="slAssunto">
                                Assunto:
                                <select id="slAssunto" name="slAssunto">                                    
                                    <option value="Orçamento">Orçamento</option>
                                    <option value="Dúvidas">Dúvidas</option>
                                </select>
                            </label>
                            <label for="txNome">Nome: <input id="txNome" name="txNome" type="text" /></label>                            
                            <label for="txEmail">E-mail: <input id="txEmail" name="txEmail" type="text" /></label>
                            <label for="txTelefone">Telefone: <input id="txTelefone" name="txTelefone" type="text" /></label>                                                                        
                            <label for="txDescricao">Descrição: <textarea id="txDescricao" name="txDescricao" type="textarea" cols="22" rows="7"></textarea></label>
                        </fieldset>                            
                    <div class="clear"></div>
                    <br/>                    
                    <?php
                        //require_once ('sistema/recaptcha/recaptchalib.php');
                        //$publickey = "6LfjD_kSAAAAAA-BpQ5Wey8-T4K1HpH3iIP_1i1H";  // chave pública
                        //echo recaptcha_get_html($publickey);
                    ?>                        
                    <br/>                        
                    <input type="submit" id="sbEnviar" name="sbEnviar" value="Enviar"  />                    
                </form>-->                    
                </div> 
                
                <div class="texto" id="embreve">
                    <div id="embreveContato"></div>                    
                    <hr/>
                </div>
                <div class="clear"></div>
            </section>   
        </div>
        <div id="section_home"></div>
        <?php include './rodape.php';?>
    </body>
</html>
