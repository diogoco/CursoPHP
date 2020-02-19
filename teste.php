<?php
include 'biblioteca.php';
//include_once 'biblioteca.php';
   // $vetor = array('Fusca', 'Brasilia');
   // var_dump($vetor);
      echo "Ola<br>";
      print "ALo<br>";
     // print_r();
     //var_dump();
      $nome = 'Diogo';
      $valor = 5;
      $valor= quadrado($valor);
      echo $valor;
      $a =5;
      $b = &$a; // vinculaçao
      //octal
      $o = 0123;
      $h = 0x123;
      $nc = 4e21;
      class Computador{
          var $cpu;

          function ligar(){
              echo "LIGANDO COMPUTADOR A {$this->cpu}..";
          }
      }
      $obj = new Computador;
      $obj->cpu = "500mhz";
      $obj->ligar();
    ?>