<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form e file</title>
</head>

<body>
    <h1>Gestione form e file esterni</h1>

    <form method="POST" action="ciao.php">
        <label for="nome">Nome utente</label>
        <input type="text" id="nome" name="nome" required>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <button type="submit" id="invia">INVIA</button>
    </form>

    <hr>

    <form method="GET" action="ciao.php">
        <fieldset>
            <legend>ISCRIVITI</legend>
            <label for="nome">Nome utente</label>
            <input type="text" id="nome2" name="nome2" required>
            <label for="email">Email</label>
            <input type="email" id="email2" name="email2" required>
            <label for="scelta">Corso scelto</label>
            <select id="scelta" name="scelta" required>
                <option value=""></option>
                <option value="front">Front-end</option>
                <option value="back">Back-end</option>
                <option value="full">Full Stack</option>
            </select>
            <button type="submit" id="invia">INVIA</button>
        </fieldset>
    </form>

</body>

</html>