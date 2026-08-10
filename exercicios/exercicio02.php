<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02 Estruturas de dados com arrays e objetos</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<style>
    .caixa{
            display: flex;
            gap: 20px;
            justify-content:center ;
            font-family: Arial, Helvetica, sans-serif;
            margin-top: 20px;
            
        }
 
        .usuario1{
            border: 2px solid #333;
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            background-color: #f9f9f9;
            
        }
 
        .usuario1{
            margin-top: 0;
            color: #1170ff;  
        }
</style>

<body>
    <h1>
        Acessando e exibindo os dados de Objetos genericos
    </h1>
    

    <?php

    $usuario1 = new stdClass;

    $usuario1->nome = "Pedro H.";
    $usuario1->email = "peedr@gmail.com";
    $usuario1->senha = "123321";
    $usuario1->idade = 17;
    $usuario1->sexo = "Masculino";
    $usuario1->cidade = "São Paulo"
    ?>

    <?php
    $usuario2 = [
        "nome" => "Pro H.",
        "email" => "pee@gmail.com",
        "senha" => "1321",
        "idade" => 17,
        "sexo"  => "mculino",
        "cidade" => "So Paulo"
    ];
    ?>

    <main class="caixa">
        <article class=" usuario1">
            <h2>Usuario 1</h2>
            <ul>
                <li> Nome de Usuário: <?= $usuario1->nome ?></li>
                <li> Email: <?= $usuario1->email ?></li>
                <li> Idade: <?= $usuario1->idade ?></li>
            </ul>
        </article>
        <section class="usuario1">
            <h2>Usuario 2</h2>
            <ul>
                <li>Nome de Usuário: <?= $usuario2["nome"] ?></li>
                <li> Email: <?= $usuario2["email"] ?></li>
                <li>Idade: <?= $usuario2["idade"] ?></li>
            </ul>
        </section>

    </main>




 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


  
</body>

</html>