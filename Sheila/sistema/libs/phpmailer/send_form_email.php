<?php
	if(isset($_POST['txEmail'])) {

	// EDITE ESTAS LINHAS
		$email_to = "contato@desenhandomoda.com.br";
		$email_subject = $assunto;		
		
	function died($error) {
		// Seu codigo de erro
		echo "Sinto muito, mas houve um problema ao enviar a mensagem. ";
		echo "Verifique os erros abaixo.<br /><br />";
		echo $error."<br /><br />";
		echo "Por favor retorne a pagina anterior e corrija os problemas.<br /><br />";
		die();
	}

	// validação das variaveis
	if(!isset($_POST['txNome']) ||
			!isset($_POST['txEmail']) ||
			!isset($_POST['txTelefone']) ||
			!isset($_POST['sl']) ||			
			!isset($_POST['txDescricao'])) {
				died('Sentimos muito, mas houve um problema com o formulário enviado.');
			}

			
			$nome = $_POST["txNome"];
			$email = $_POST["txEmail"];
			$telefone = $_POST["txTelefone"];
			$assunto = $_POST["slAssunto"];
			$descricao = $_POST["txDescricao"];
			
			$error_message = "";
			$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+.[A-Za-z]{2,4}$/';
			if(!preg_match($email_exp, $email)) {
				$error_message .= 'O email nao e valido..<br />';
			}
			$string_exp = "/^[A-Za-z .'-]+$/";
			if(!preg_match($string_exp, $nome)) {
				$error_message .= 'O nome nao e valido.<br />';
			}			
			if(strlen($descricao) < 2) {
				$error_message .= 'O comentario nao e valido.<br />';
			}
			if(strlen($error_message) > 0) {
				died($error_message);
			}
			$email_message = "Form details below.nn";

			function clean_string($string) {
				$bad = array("content-type","bcc:","to:","cc:","href");
				return str_replace($bad,"",$string);
			}

			$email_message .= "Nome: ".clean_string($nome)."n";
			$email_message .= "E-mail: ".clean_string($email)."n";
			$email_message .= "Telefone: ".clean_string($telefone)."n";
			$email_message .= "Descrição: ".clean_string($descricao)."n";

			// cria email headers
			$headers = 'From: '.$email."rn".
					'Reply-To: '.$email."rn" .
					'X-Mailer: PHP/' . phpversion();
			@mail($email_to, $email_subject, $email_message, $headers);
?>

<!-- include your own success html here -->


	<?php
	}
	?>

