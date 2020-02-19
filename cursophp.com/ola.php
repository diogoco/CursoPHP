<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['enviar-form'])){
       
       $formatos = array("png", "jpeg", "jpg", "gif", "c", "docx", "txt");
       $quantidadeArquivos = count($_FILES['arquivo']['name']);
       $contador = 0;
        while($contador < $quantidadeArquivos){

        $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);
        if(in_array($extensao,$formatos)){
        
            $pasta = "arquivos/";
            $temporario = $_FILES['arquivo']['tmp_name'][$contador];
            $novoNome = uniqid().".$extensao";
            
            if(move_uploaded_file($temporario, $pasta.$novoNome))
            echo "SUCESSO para $pasta.$novoNome<br>";
            else
            echo "ERRO AO TENTAR UPLOAD";
        }else 
        
            echo "NAO PERMITIDA ESSA EXTENSAO";
            $contador++;
        }  
            
    }
   
    ?>




    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype = "multipart/form-data">
        <input type="file" name="arquivo[]" multiple><br>
        <input type="submit" name="enviar-form" >
    </form>
</body>
</html>