<?php
    if(isset($_POST["formulario"])) {
        print_r($_POST);
    }

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <form action=formulario2.php" method="POST">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="nome">
            
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            
            <input type="submit" name="formulario" value="Enviar Cadastro">
        </form>
    </body>
</html>