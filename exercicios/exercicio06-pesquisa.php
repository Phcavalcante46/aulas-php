    <?php
    date_default_timezone_set('America/Sao_Paulo');
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Funções de Data e Hora</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <h1>Exercicio 06 PESQUISA</h1>

            <?php
            /* A função "Time" serve para obter o horário atual do sistema em formato numérico, permitindo que o programa registre e trabalhe com datas e horários. */
            $timestamp = time();
            ?>
            <h2>time()</h2>
            <p>Timestamp: <?= $timestamp ?></p>

            <?php
            /*Basicamente o "getdate()" transforma a data atual e divide em partes como se fosse um array porem das datas citadas  */
            $data = getdate();
            ?>
            <h2>getdate()</h2>
            <p>Data atual: <?= $data['mday'] ?>/<?= $data['mon'] ?>/<?= $data['year'] ?></p>

            <?php
            //Um timestamp é uma marca de tempo que registra uma data e hora específicas. bancos de dados, aplicativos e sistemas para indicar exatamente quando ocorreu.

            /* mktime(): cria um timestamp a partir de uma data e hora definidas */
            $dataCriada = mktime(10, 30, 0, 8, 17, 2026);
            ?>
            <h2>mktime()</h2>
            <p><?= date("d/m/Y H:i:s", $dataCriada) ?></p>

            <?php
            /* checkdate(): verifica se a data qur foi informada é válida */
            $valida = checkdate(2, 29, 2024);
            ?>
            <h2>checkdate()</h2>
            <p><?= $valida ? "Data válida" : "Data inválida" ?></p>

            <?php
            /* Exemplo: valida uma data e, se essa data existir, cria seu timestamp */
            $dia = 25;
            $mes = 12;
            $ano = 2026;


            if (checkdate($mes, $dia, $ano)) {
                $natal = mktime(0, 0, 0, $mes, $dia, $ano);
            ?>


                  Resumo: mktime() pega uma data e hora que nós entendemos e a converte para um formato que o computador entende melhor.
                
                <h2>mktime:</h2>
                <p>Data criada: <?= date("d/m/Y", $natal) ?></p>
            <?php }
            ?>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>

    </html>