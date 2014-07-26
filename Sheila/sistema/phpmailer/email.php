<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$nome = $_POST["txNome"];
$email = $_POST["txEmail"];
$telefone = $_POST["txTelefone"];
$assunto = $_POST["slAssunto"];
$descricao = $_POST["txDescricao"];

// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require("./class.phpmailer.php");
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
$mail->AddCC('helder@helderwebergayer.url.ph', 'Desenhando Moda'); // Copia
$mail->AddBCC('shejapa@hotmail.com', 'Desenhando Moda'); // Cópia Oculta
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
    echo "E-mail enviado com sucesso!";
} else {
    echo "Não foi possível enviar o e-mail.<br /><br />";
    echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
}
