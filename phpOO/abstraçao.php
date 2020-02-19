<?php

abstract class Banco {
    protected $saldo;
    protected $limiteSaque;
    protected $juros;
    const empresa = "Anjo";


  abstract protected function Sacar($s);
  abstract protected function Depositar($d);

  public function exibirNome(){
      echo self::empresa;
  }
  public function setSaldo($s){
        $this->saldo = $s;
  }
  public function getSaldo(){
      return $this->saldo;
  }
  
}




class Bradesco extends Banco{
   const empresa ="Filho";
   public function Sacar($s){
       $this->saldo -=$s;
       echo "Sacou $s";
   }
   public function Depositar($d){
        $this->saldo +=$d;
        echo "Depositou $d";
   }
   
  public function exibirNome(){
    echo parent::empresa;
}
}