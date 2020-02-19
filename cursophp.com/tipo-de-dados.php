<?php
$nome = "Ola mundo";

if(is_string($nome)){
    echo "É STRING";
}else 
    echo "Nao é string";
    echo "<Hr>";
    //is_int
    //is_float
    //is_bool

$a = 1;
$b = 3;
$c = 7;
//is_object()
 function soma(){
   echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
 }

 $db = 1234.56;
 $preco = number_format($db,2,".",",");
 echo "O valor do produto é R$".$preço;
?>