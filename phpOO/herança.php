<?php

class Automovel {
    public $modelo;
    public $cor;
    public $ano;
    protected $rodas;
    private $lugares;

    public function Andar(){
        echo "Andou";
    }

    public function Parar(){
        echo "Parou";
    }

}

class Carro extends Automovel{
        
}

class Moto extends Automovel{

}


$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor="Vermelho";