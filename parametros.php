<?php
$variavel = 0;

function incrementa($variavel, $valor){
    $variavel += $valor;
}
$a =10;
incrementa($a,20);
echo $a;
function incrementa2(&$variavel, $valor){
    $variavel += $valor;
}
incrementa2($a,20);
echo "<br>".$a;
echo "<br>";

//passagem dinamica de paramentros
function ola(){
        $argumentos = func_get_args();
        $quantidade = func_num_args();

        for($n=0; $n < $quantidade; $n++){
                echo 'Ola ' . $argumentos[$n] . "<br>";
        }
        echo $quantidade."<br>";
}

ola('Joao', 'Maria', 'Jose');

//manipulando arquivos com php

$fd = fopen("aa.txt","r");

    while(!feof($fd)){
        //le uma linha
        $buffer = fgets($fd, 4096);
        echo $buffer . "<br>\n";

    }
    fclose($fd);

$fp = fopen("aa.txt","w");

fwrite($fp,"linha txt1\n");
fwrite($fp,"linha txt2\n");
fwrite($fp,"linha txt3\n");
fwrite($fp,"linha txt4\n");
    
fclose($fp);

$post = $_POST;
$retorno = cria


?>