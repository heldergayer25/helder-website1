<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('../recaptcha/recaptchalib.php');
require("../phpmailer/class.phpmailer.php");
require '../phpmailer/class.smtp.php';
require '../phpmailer/email.php';
  $privatekey = "6LfjD_kSAAAAACYlzi22Gk8cdeCU9e_jW8gldwRP";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    echo "<meta charset='UTF-8'><script>alert('Código de segurança digitado errado, por favor tente novamente!'); javascript:window.history.go(-1);</script>";
  } else {    
    
    $nome = $_POST["txNome"];
    $email = $_POST["txEmail"];
    $telefone = $_POST["txTelefone"];
    $assunto = $_POST["slAssunto"];
    $descricao = $_POST["txDescricao"];

    $enviar = new email();
  
    $enviar->validarEmail($nome, $email, $telefone, $assunto, $descricao);
      
  }
  
  