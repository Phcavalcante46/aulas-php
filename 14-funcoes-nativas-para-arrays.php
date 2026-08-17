<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para arrays</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

      <div class="container">
        <h1>Funções nativas para arrays</h1>
        <hr>
        <h2>implode:</h2>
        <p>Transforma arrays em uma string</p>


        <?php 
        $arrayBandas = ["Pink Floyd", "Genesis", "Yes"];
        $textoBandas = implode(" - ", $arrayBandas);
        ?>

        <pre><?php var_dump($arrayBandas) ?></pre>
        <pre><?php var_dump($textoBandas) ?></pre>

        <hr>

        <h2>extract()</h2>
        <p>Extrai chaves associativas para variaveis</p>

        <?php 
        
        $nome = "Beltrano";

        $aluno = ["id" => 1, "nome" => "fulano", "idade" => 25];
        extract($aluno, EXTR_PREFIX_ALL, "chave");
        //Usamos o segundo parametro para definir um prefixo para os nome
        //isso evita conflito/sobreescrita de outras variaveis
        
        ?>

         <ul>
            <li>ID: <?= $chave_id ?></li>
            <li>Nome: <?= $chave_nome ?></li>
            <li>Idade: <?= $chave_idade ?></li>
         </ul>
         
         <p>Variavel <code>$nome</code>original: <?= $nome ?></p>
        
      </div>
</head>
<body>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>