<?php


class Animal{
    public $habitat;
    public $emal;

    public function __clone(){ // quando algum objeto é clonado
        echo "Clonagem de objetos";
    }
    public function validar($emal){

        if(!filter_var($emal, FILTER_VALIDATE_EMAIL))
            throw new Exception("Este email é invalido", 1);
        else
            echo "Email cadastrado com sucesso!";
    }
}


/*$gato = new Animal();
$gato->habitat = "Selva";

$gato2 = $gato; // referencia, nao um clone
$gato2 = clone $gato; // clone do objeto
$gato2->habitat = "Tundra"; // modifica gato

echo $gato->habitat;

*/
$animal = new Animal();
try{

$animal->validar("contato@");
}catch(Exception $e){
    echo "Mensagem ".$e->getMessage()."<br>";
    echo "Codigo ".$e->getCode()."<br>";
    echo "Linha ".$e->getLine()."<br>";
    echo "Arquivo ".$e->getFile();

}



