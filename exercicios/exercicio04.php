<!DOCTYPE html>
<html lang="pt-r">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
</head>

<body>

    <h1> Exercício 04: estruturas de repetição (loops) e estruturas de dados </h1>

    
        <?php
        $linguagens = [
            [
                "id" => "1",
                "nome" => "HTML",
                "descrição" => "Estruturação"
            ],


            [
                "id" => "2",
                "nome" => "CSS",
                "descrição" => "Estilos"
            ],

            [
                "id" => "3",
                "nome" => "JS",
                "descrição" => "Comportamentos"
            ],

            [
                "id" => "4",
                "nome" => "PHP",
                "descrição" => "Back-End"
            ],

            [
                "id" => "5",
                "nome" => "SQL",
                "descrição" => "Manipulação de dados"
            ]

        ];

foreach($linguagens as $linguagem):
?>





<p><b><?= $linguagem["id"] ?></b> <span> <?=  $linguagem["nome"] ?></span> </p></li> </p> 

<p> <span> <?=  $linguagem["descrição"] ?></span></p> 

   

<?php 

endforeach;

?>
            
            


</body>

</html>