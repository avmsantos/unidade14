<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        
    </head>

    <body>
        
        <?php
            if(isset($_POST["nome"])) {
                $nome = $_POST["nome"];
            } else {
                $nome = "sem definição";
            }

            if(isset($_POST["email"])) {
                $email = $_POST["email"];
            } else {
                $email = "sem definição";
            }

            //$nome = isset($_POST["nome"]) ? $_POST["nome"] : "sem definição";
                echo "Nome: " . $nome;
                echo "email: " . $email;
            ?>
    </body>
</html>