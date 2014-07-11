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
    </head>
    <body>                
        <?php include'./cabecalho.php'?>       
        <div id="section_home"></div>        
            <section class="wrapper">  
                <div class="texto">
                    <p>Se está interessado(a) no meu trabalho ou tem dúvidas, sinta-se à vontade para me contactar, través do formulário abaixo:</p>
                    <form action="" id="formContato" name="formContato" method="post">
                    <fieldset>
                        <legend>Contato</legend>
                        <label for="txNome">Nome: <input id="txNome" name="txNome" type="text" size="30"/></label>
                        <label for="txEmail">E-mail: <input id="txEmail" name="txEmail" type="text" size="30"/></label>
                        <label for="txTelefone">Telefone: <input id="txTelefone" name="txTelefone" type="text" size="30"/></label>
                        <label id="slAssunto">
                            Assunto:
                            <select id="slAssunto" name="slAssunto">
                                <option value="...">...<option/>
                                <option value="Orçamento">Orçamento<option/>
                                <option value="Dúvidas">Dúvidas<option/>
                            </select>
                        </label>
                        <label for="txDescricao">Descrição: <textarea id="txDescricao" name="txDescricao" type="textarea" cols="22" rows="7"></textarea></label>
                    </fieldset>
                    <input type="submit" id="sbEnviar" name="sbEnviar" value="Enviar" />                    
                </form>
                </div> 
            </section>        
        <div id="section_home"></div>
        <?php include './rodape.php';?>
    </body>
</html>
