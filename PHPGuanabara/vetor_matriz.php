<pre>
    <table border= "1"> 
        <tr>
<?php
$n = array(3,5,6,2,45);
print_r($n);

$n[] = 10;
print_r ($n);

$n = range(5,30,4); // comeca em 5 vai ate 30 somando de 4 em 4
print_r ($n);



$na = array(1=>"A", 3=>"C", 6=>"E", 8 =>"L");
unset($na[6]);
foreach($na as $valor){
    echo "<td>$valor   </td>";
}
  
$cad = array("nome"=>"Ana", "idade"=>23, "peso"=>70);
print_r($cad);
$cad["fuma"] = false;

    foreach($cad as $campo => $valor){
        echo "O campo $campo possui conteudo $valor\n";
    }

$matriz = array (array(2,3), array(3,4), array(9,6));
$matriz[2][0]= "KKKK";
$matriz[0][2]="ola";
print_r($matriz);

?>
    </table>
</pre>
    