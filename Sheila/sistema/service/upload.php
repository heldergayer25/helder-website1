<?php
/**
 * Classe responsável por fazer o upload multiplo de imagens, utilizando a biblioteca WideImage http://wideimage.sourceforge.net/
 * para manipular as imagens.
 */

   if(isset($_FILES['imagensPost'])) {
      require_once '../libs/wideImage/WideImage.php'; //Inclui classe WideImage à página
 
      date_default_timezone_set("Brazil/East");
 
      $name 	= $_FILES['imagensPost']['name']; //Atribui uma array com os nomes dos arquivos à variável
      $tmp_name = $_FILES['imagensPost']['tmp_name']; //Atribui uma array com os nomes temporários dos arquivos à variável
 
      $allowedExts = array(".gif", ".jpeg", ".jpg", ".png", ".bmp"); //Extensões permitidas
 
      $dir = './';
 
      for($i = 0; $i < count($tmp_name); $i++) {//passa por todos os arquivos
      
         $ext = strtolower(substr($name[$i],-4)); 
         if(in_array($ext, $allowedExts)) {//Pergunta se a extensão do arquivo, está presente no array das extensões permitidas
         
            $new_name = date("Y.m.d-H.i.s") ."-". $i . $ext;
 
            $image = WideImage::load($tmp_name[$i]); //Carrega a imagem utilizando a WideImage
 
            //$image = $image->resize(170, 180, 'outside'); //Redimensiona a imagem para 170 de largura e 180 de altura, mantendo sua proporção no máximo possível
            //$image = $image->crop('center', 'center', 170, 180); //Corta a imagem do centro, forçando sua altura e largura
 
            $image->saveToFile($dir.$new_name); //Salva a imagem
         }
      }
   }
?>