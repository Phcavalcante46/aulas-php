<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 PHP</title>

    <style>
        .destaque {
            color: purple;
        }   
    </style>
   
</head>
<body>
    <?php
    $data = "29/07/2026";
    $nome = "Pedro Henrique C.";
    $curso = "Tec. Informática para internet";
     const CARGAHORARIA = 1000;
    $limitedefaltas = CARGAHORARIA *  0.25;
    
    ?>

    <h2 class="destaque">
        <?php
        echo "<p>Olá  Hoje é dia $data Meu nome é $nome e estou fazendo o curso $curso e a carga horaria é " .CARGAHORARIA ;

         echo "<p> o limite de faltas desse curso é $limitedefaltas"
        ?>
    </h2>

    

</body>
</html>