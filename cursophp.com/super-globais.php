<html>
    <body>


<?php
/*
$GLOBALS
$_SERVER
$_REQUEST
$_FILES
$_ENV
$_COOKIE
$_SESSION
$_POST
$_GET
$_POST7
*/
   ?> 
<?php
/*if(isset($_POST['enviar-form'])){
    $erros = array();
    if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT))
        $erros[] = "Idade precisa ser um inteiro";
    
    if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL))
        $erros[] = "EMAIL INVALIDO";
  
    if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT))
        $erros[] = "PESO PRECISA SER FLOAT";
    
    elseif(!$peso = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP))
    $erros[] = "IP INVALIDO";      
    
    if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL))
    $erros[] = "URL INVALIDA";
    }
   if(!empty($erros)){
      foreach($erros as $erro)
        echo "<li> $erro </li>";
      
    }
*/
if(isset($_POST['enviar-form'])){
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        echo $nome."<br>";

   
        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        echo $idade."<br>";

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        echo $email."<br>";


}
?>


   <form action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Nome: <input type = "text" name = "nome"> <br>
        IDADE : <input type = "text" name="idade"><br>
        email : <input type = "text" name = "email"><br>
        peso : <input type = "text " name = "peso"><br>
        
        url: <input type = "text" name ="url"><br>
        <button type = "submit" name="enviar-form"> Enviar </button><br>

    </form>

    </body>


</html>