<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
if (isset($_FILES['arquivo']['name']))
{
    $uploaddir = 'c:\\xampp\\tmp\\';
    $arquivo = $uploaddir. $_FILES['arquivo']['name'];
    
    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $arquivo)) {
        
        print "O arquivo foi gravado com sucesso.";
    } else {
        
        print "Erro. O arquivo não foi enviado";
    }
}


?>
        <p>
        <form enctype="multipart/form-data" action="testeArquivo.php" method="POST">
        <input type="hidden" name="MAX_FILE_SIZE" value="3000" />
        Enviar este arquivo: <input type="file" name="arquivo" >
        <input type="submit" value="Envia arquivo">
        </form>
    </p>
    </body>
</html>



