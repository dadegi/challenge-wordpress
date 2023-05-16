<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciao</title>
</head>

<body>
    <h1>BENVENUTO</h1>

    <?php
    if (isset($_POST["nome"])) {
        echo "<h3>Ciao, " . $_POST["nome"] . "</h3><h4>La tua email è: " . $_POST["email"] . "</h4>";
    }
    ?>
    <!-- Nel form della pagina index è stato usato il metodo POST; per leggere i dati la procedura php userà quindi il superglobal $_POST (ricordiamo che i superglobal creano automaticamente degli array), che riceverà i dati dal form leggendo il name dei campi -->

    <?php
    if (isset($_GET["nome2"])) {
        echo "<h1>ISCRIZIONE CONFERMATA</h1><h3>Ciao, " . $_GET["nome2"] . "</h3><h4>La tua email è: " . $_GET["email2"] . "</h4><h4>Confermiamo la tua iscrizione al corso " . scelta();
    }

    function scelta()
    {
        if ($_GET["scelta"] == "front") {
            return "Front-end della durata di tre mesi";
        } elseif ($_GET["scelta"] == "back") {
            return "Back-end della durata di tre mesi";
        } else {
            return "Full Stack della durata di cinque mesi";
        }
    }
    ?>
    <!-- Nel form della pagina index è stato usato il metodo GET, che espone nell'URL i dati inviati; per leggere i dati la procedura php userà quindi il superglobal $_GET (ricordiamo che i superglobal creano automaticamente degli array), che riceverà i dati dal form leggendo il name dei campi -->

</body>

</html>