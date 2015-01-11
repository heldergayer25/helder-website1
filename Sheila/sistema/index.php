<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        include './Carro.php';
        include './Conexao.php';
        include './CarroDAO.php';
        
//        $carro2 = new Carro();
//        
//        $carro2->setMarca('VOLVO');
//        $carro2->setModelo('Audi4');
//        
        $carroDao = new CarroDAO();
//        $carroDao->salvar($carro2);
//        
        //$carroDao->excluir(6);
        
//        $carro = $carroDao->pesquisar(8);
//        echo 'o carro pesquisado era:'.$carro->getMarca().'  '.$carro->getModelo();
        
//        $carro = new Carro();
//        $carro->setId(8);
//        $carro->setMarca("Volkswagen");
//        $carro->setModelo("Fusca");
//        
//        $carroDao->alterar($carro);        
          $lista = $carroDao->listar();
        
          foreach ($lista as $obj){
              echo 'Id: '.$obj->getId().'<br/>';
          }
          
        ?>
    </body>
</html>
