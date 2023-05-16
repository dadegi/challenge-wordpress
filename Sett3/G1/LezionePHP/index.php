<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basi PHP</title>
</head>

<body>
    <h1>Basi di PHP</h1>
    <p id="testo"></p>
    <?php
    // Stampa con variabili
    $testo = "Hello, World! <br>";
    echo $testo;
    ?>

    <script>
        document.getElementById('testo').innerHTML = 'Hello, World!<br>';
    </script>

    <?php
    $val1 = 5;
    $val2 = 2;

    echo $val1 + $val2 . "<br>";

    // Variabili globali, utilizzabili SOLO in ambiato globale (cioè ALL'ESTERNO delle funzioni)
    $variabileGlobal = "Variabile globale";

    function testGlobal()
    {
        echo "La variabile variabileGlobal dentro la funzione è uguale a: $variabileGlobal<br>";
    }

    testGlobal();

    echo "La variabile variabileGlobal fuori dalla funzione è uguale a $variabileGlobal<br>";

    // Variabili locali, utilizzabili SOLO in ambiato locale (cioè ALL'INTERNO delle funzioni)
    function testLocal()
    {
        $variabileLocal = "Variabile locale";
        echo "La variabile variabileLocal dentro la funzione è uguale a $variabileLocal<br>";
    }

    testLocal();

    echo "La variabile variabileLocal fuori dalla funzione è uguale a $variabileLocal<br>";

    // Variabili super global, definite globalmente ma utilizzabili anche in ambito locale con le keyword global - $GLOBALS[]
    
    // global
    $add1 = 6;
    $add2 = 8;

    function somma1()
    {
        global $add1, $add2;
        $risultato = $add1 + $add2;
        return $risultato;
    }

    echo "<h3>Il risultato della funzione è " . somma1() . "</h3>";

    // $GLOBALS[];
    function somma2()
    {
        $risultato = $GLOBALS['add1'] + $GLOBALS['add2'];
        return $risultato;
    }

    echo "<h3>Il risultato della funzione è " . somma2() . "</h3>";

    // Variabili statiche: variabili locali che NON PERDONO IL LORO VALORE, quindi non vengono killate quando la funzione nella quale sono definite ha terminato la sua esecuzione, e vengono definite con la keyword static
    
    function incremento()
    {
        static $variabileStatic = 1;
        echo "<h3>" . $variabileStatic . "</h3>";
        $variabileStatic++;
    }

    incremento();
    incremento();
    incremento();

    // Keyword var_dump: stampa il tipo e il valore delle variabili
    $num = 0;
    $stringa = "stringa";
    $decimale = 15.25;
    $booleano = false;
    $matrice = ['mele', 'pere', 'banane'];
    $vuoto = null;

    var_dump($num);
    echo "<br>";
    var_dump($stringa);
    echo "<br>";
    var_dump($decimale);
    echo "<br>";
    var_dump($booleano);
    echo "<br>";
    var_dump($matrice);
    echo "<br>";
    var_dump($vuoto);
    echo "<br>";

    // Concatenazione di stringhe
    $saluto = "Ciao, mi chiamo Dario";
    $newLine = "Questa riga \n andrà daccapo";
    $newBr = nl2br($newLine);
    $indirizzo = <<<EOD
    $saluto, e abito a Portici
    EOD;

    echo <<<EOD
    <h3>$saluto</h3>
    EOD;

    echo "<h3>" . $newLine . "</h3>";

    echo <<<EOD
    <h3>$newBr</h3>
    EOD;

    echo "<h3>" . $indirizzo . "<h3>";

    // Strutture condizionali
    // if-elseif-else
    $ora = date("H");

    if ($ora < 12) {
        echo "<h3>Buongiorno</h3>";
    } elseif ($ora < 18) {
        echo "<h3>Buon pomeriggio</h3>";
    } elseif ($ora < 24) {
        echo "<h3>Buonasera</h3>";
    } else {
        echo "<h3>Buonanotte</h3>";
    }

    //switch-case
    $mioPC = "Lenovo";
    $descrivi = "<h3>Il mio PC è un ";

    switch ($mioPC) {
        case "Asus":
            echo $descrivi . "Asus</h3>";
            break;

        case "HP":
            echo $descrivi . "HP</h3>";
            break;

        case "Dell":
            echo $descrivi . "Dell</h3>";
            break;

        case "Acer":
            echo $descrivi . "Acer</h3>";
            break;

        default:
            echo "<h3>Il mio PC non è un Asus, un HP, un Dell o un Acer</h3>";
    }

    // Strutture cicliche
    // while

    $counter = 11;

    while ($counter <= 10) {
        echo "Il numero è: $counter <br>";
        $counter ++;
    }

    echo "<p>&nbsp;</p>";

    //do-while

    $counter2 = 11;

    do {
        echo "Il numero è: $counter2 <br>";
        $counter2++;
    } while ($counter2 <= 10);

    // Strutture iterative
    // for

    for ($i = 1; $i <= 10; $i++) {
        echo "<h3>numero $i</h3>";
    }

    // foreach (ciclo di destrutturazione array)

    $mioArray = ["Fabio", "Ivan", "Gianluca", "Giulia", "Alessandra", "Madalina"];

    foreach ($mioArray as $value) {
        echo "<h3>Nome studente: $value</h3>";
    }

    // Array
    // array indicizzato; per laa sua creazione è preferibile il metodo di riga 200
    $auto = array("Fiat", "Ford", "Renault", "Citroen");
    $lunghezzaAuto = count($auto);

    for ($i = 0; $i < $lunghezzaAuto; $i++) {
        echo "<h3>$auto[$i]</h3>";
    }

    // array associativi: gli indici non sono numerici ma hanno un nome univoco
    $persone = ["Giovanni" => 9, "Fabrizio" => 14, "Stefano" => 6];

    foreach($persone as $i => $i_value) {
        echo "Chiave: $i; Valore: $i_value<br>";
    }

    // array multidimensionali: array che contengono array
    $persone2 = [
        ["Giovanni", 9],
        ["Fabrizio", 14],
        ["Stefano", 6]
    ];

    $lunghezzaPersone = count($persone2);

    for ($indice1 = 0; $indice1 < $lunghezzaPersone; $indice1++) {
        echo "<ul>";
        for ($indice2 = 0; $indice2 < 2; $indice2++) {
            echo "<li>" . $persone2[$indice1][$indice2] . "</li>";
        }
        echo "</ul>";
    }

    ?>

</body>

</html>