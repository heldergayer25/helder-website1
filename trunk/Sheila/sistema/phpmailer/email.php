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
        
        // Inicia a classe PHPMailer
        $mail = new PHPMailer();
        // Define os dados do servidor e tipo de conexão
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->IsSMTP(); // Define que a mensagem será SMTP
        $mail->Host = "mx1.hostinger.com.br"; // Endereço do servidor SMTP
        $mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
        $mail->Username = 'helder@helderwebergayer.url.ph'; // Usuário do servidor SMTP
        $mail->Password = 'guitar10'; // Senha do servidor SMTP
        $mail->Port = '2525';
        // Define o remetente
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->From = "helder@helderwebergayer.url.ph"; // Seu e-mail
        $mail->FromName = "Desenhando Moda"; // Seu nome 
        // Define os destinatário(s)
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->AddAddress($email);
        //$mail->AddAddress('ciclano@site.net');
        $mail->AddCC('contato@desenhandomoda.com.br', 'Desenhando Moda'); // Copia
        //$mail->AddBCC('shejapa@hotmail.com', 'Desenhando Moda'); // Cópia Oculta
        // Define os dados técnicos da Mensagem
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
        $mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
        // Define a mensagem (Texto e Assunto)
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->Subject  = $assunto; // Assunto da mensagem
        $mail->Body = $descricao;
        $mail->AltBody = $descricao;
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
            echo "<meta charset='UTF-8'><script>alert('Não foi possível enviar o e-mail, tente novamente!'); window.location='../../contato.php';</script>";            
        }
    }
}