<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class email{
    
    function __construct() {
        
    }
    
    public function validarEmail($nome, $email, $telefone, $assunto, $descricao){
        // Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
//        require("./class.phpmailer.php");
        // Inicia a classe PHPMailer
        $mail = new PHPMailer();
        // Define os dados do servidor e tipo de conexão
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->IsSMTP(); // Define que a mensagem será SMTP
        $mail->Host = "mx1.hostinger.com.br"; // Endereço do servidor SMTP
        $mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
        $mail->Username = 'contato@desenhandomoda.com.br'; // Usuário do servidor SMTP
        $mail->Password = '25021989'; // Senha do servidor SMTP
        $mail->Port = '2525';
        $mail->SMTPDebug = 2;
        //$mail->Mailer = 'smtp';
        // Define o remetente
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->From = "contato@desenhandomoda.com.br"; // Seu e-mail
        $mail->FromName = "Desenhando Moda"; // Seu nome 
        // Define os destinatário(s)
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->AddAddress('contato@desenhandomoda.com.br', 'Desenhando Moda');
        $mail->addCC($email);
        //$mail->AddAddress('ciclano@site.net');
        //$mail->AddCC('contato@desenhandomoda.com.br', 'Desenhando Moda'); // Copia
        //$mail->AddBCC('shejapa@hotmail.com', 'Desenhando Moda'); // Cópia Oculta
        // Define os dados técnicos da Mensagem
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
        $mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
        // Define a mensagem (Texto e Assunto)
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->Subject  = $assunto; // Assunto da mensagem
                
        $contato = 
                "<html>"
                . "<head>"
                    ."<style type='text/javascript'>"                        
                        ."div.texto { color: #E9556A; width: 500px; }                          
                          div.texto label { display: block; padding-bottom: 5px; font-weight: bold; }                          
                          div.texto label span { color: #E9556A; font-weight: normal;}"                          
                    ."</style>"
                . "</head>"   
                . "<body>"
                    ."<div class='texto'>"
                        ."<p>Você recebeu um contato: </p>"
                        ."<br/>"
                        ."<label>Assunto:  <span>".$assunto."</span></label>"
                        ."<label>Nome:  <span>".$nome."</span></label>"                        
                        ."<label>Telefone:  <span>".$telefone."</span></label>"                        
                        ."<label>E-mail:  <span>".$email."</span></label>"                        
                        ."<label>Descrição: </label>"                        
                        ."<p>".$descricao."</p>"
                    . "</div>"
                ."</body>"
            ."</html>";            
        
        $mail->Body = $contato;
        
        //$mail->AltBody = $descricao;
        // Define os anexos (opcional)
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        // $mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
        // Envia o e-mail
        $enviado = $mail->Send();
        // Limpa os destinatários e os anexos
        $mail->ClearAllRecipients();
        $mail->ClearAttachments();
        // Exibe uma mensagem de resultado
        if ($enviado) {
            echo "<meta charset='UTF-8'><script>alert('Seu e-mail foi enviado com sucesso! :)'); window.location='../../index.php';</script>";
        } else {
            //echo "<meta charset='UTF-8'><script>alert('Não foi possível enviar o e-mail, tente novamente! Devido ao erro: ".$mail->ErrorInfo."'); window.location='../../contato.php';</script>";                   
            echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
        }
    }
}