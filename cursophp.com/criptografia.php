<?php
$senha = "123456";

/*$novasenha = base64_encode($senha);
echo $novasenha." Sua senha é:".base64_decode($novasenha);

echo md5($senha)."<br>";

echo sha1($senha);
*/
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);

if(password_verify($senha, $senhaSegura)){
    echo "SENHA VALIDA";
}