<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Sixtaxe Geral</title>
<!-- CSS INTERNO -->   
     <style>
      .exemplo{
        border: solid 4px;
        padding: 4px;
        /* Propiedade CSS cujo valor vem de uma processamento PHP */
        color: <?php echo"orange"; ?>;
      }
     </style>
</head>
<body>
    <h1 class= "exemplo">trabalhando com PHP</h1>
    <hr>


  <?php
  // Geração de texto/string
  echo "Estou estudando a linguagem PHP para Back-End";
  echo 'Este também é uum texto/string';

  // Geração de tags/atributos HTML
  echo "<p>Este é um parágrafo gerado via PHP</p>";

  // Geração de tags/atributos HTML

  // Aspa simples fora, aspa dupla dentro
  echo'<p><abbr title = "HyperText Preprocessor"> PHP </abbr> é uma linguagem popular </p>';

  //Aspa dupla fora, aspa simples dentro
   echo"<p><abbr title = 'HyperText Preprocessor'>PHP</abbr> é uma linguagem popular </p>";

   // Aspa dupla fora, aspa dulpa com escape "\" dentro
    echo "<p><abbr title = \"HyperText Preprocessor\">PHP</abbr> é uma linguagem popular </p>";
  
  
  ?>  
  ]
  <script>
    const tituloH1 = document.querySelector('h1');
    tituloH1.addEventListener("click", function(){
      /* O conteúdo do alert foi gerado via PHP */
      alert("<?php echo "Olá PHP e JavaScript";?>");
    });
  </script>

</body>
</html>