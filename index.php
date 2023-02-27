<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <!-- General -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Veja qual a hora atual do seu navegador/computador obtida pelo JavaScript.">
    <meta name="author" content="Eduardo Mior">
    <meta name="robots" content="index">
    <title>JS Hora Atual</title>

    <!-- Icons -->
    <link rel="icon" type="image/png" href="https://i.imgur.com/Nrsp3kb.png" sizes="192x192">

    <!-- Android -->
    <meta name="theme-color" content="#FFFFFF">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="JS Hora Atual">

    <!-- iOS -->
    <meta name="apple-mobile-web-app-title" content="JS Hora Atual">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- OG -->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="JS Hora Atual">
    <meta property="og:site_name" content="JS Hora Atual">
    <meta property="og:description" content="Veja qual a hora atual do seu navegador/computador obtida pelo JavaScript.">
    <meta property="og:url" content="https://hora-atual.herokuapp.com/">
    <meta property="og:image" content="https://i.imgur.com/Nrsp3kb.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:alt" content="JS Hora Atual">

    <!-- CSS -->
    <style>
        * {
            font-family: system-ui !important;
            box-sizing: border-box !important;
        }

        body {
            margin: 0px !important;
        }

        div {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            margin-bottom: 4px;
            font-size: 52px;
        }

        #data-hora-formatada {
            margin-bottom: 4px;
            font-size: 40px;
        }

        #data-hora-formatada-longa,
        #fuso-horario,
        #millisegundos {
            margin-top: 4px;
            font-size: 20px;
        }
    </style>


</head>

<body>
    <div>
        <h1>Data e hora atual do seu computador</h1>
        <span id="data-hora-formatada" title="Data e hora atual formatada no formato curto"></span>
        <span id="data-hora-formatada-longa" title="Data e hora atual formatada no formato longo"></span>
        <span id="fuso-horario" title="Fuso-horário atual do computador"></span>
        <span id="millisegundos" title="Millisegundos UNIX da data e hora atual"></span>
    </div>
</body>

<!-- JS -->
<script>
    var dataAtual = new Date();
    document.getElementById("data-hora-formatada").innerHTML = dataAtual.toLocaleString();
    document.getElementById("data-hora-formatada-longa").innerHTML = dataAtual.toLocaleString("pt-BR", { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', 'hour': 'numeric', minute: 'numeric', second: 'numeric', timeZoneName: 'long' });
    document.getElementById("millisegundos").innerHTML = dataAtual.getTime();
    document.getElementById("fuso-horario").innerHTML = Intl.DateTimeFormat().resolvedOptions().timeZone + " ( " + dataAtual.getTimezoneOffset() + " minutos | " + (dataAtual.getTimezoneOffset() / 60) + " horas )";
</script>

</html>