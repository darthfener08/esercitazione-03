<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Riepilogo Dati Auto</title>
</head>
<body>

   <?php

        $marca = $_GET["marca"];
        $modello = $_GET["modello"];
        $stato = $_GET["stato"];
        $anno = $_GET["anno"];
        $cilindrata = $_GET["cilindrata"];
        $cavalli = $_GET["cavalli"];
        $prezzo = $_GET["prezzo"];
        $targa = $_GET["targa"];
        $descrizione = $_GET["descrizione"];

        echo "<b>Marca:</b> " . $marca . "<br>";
        echo "<b>Modello:</b> " . $modello . "<br>";
        echo "<b>Stato:</b> " . $stato . "<br>";
        echo "<b>Anno Costruzione:</b> " . $anno . "<br>";
        echo "<b>Cilindrata:</b> " . $cilindrata . "<br>";
        echo "<b>Cavalli:</b> " . $cavalli . "<br>";
        echo "<b>Prezzo:</b> " . $prezzo . " Euro<br>";
        echo "<b>Targa:</b> " . $targa . "<br>";

        echo "<b>Accessori:</b><br>";
        echo @$_GET["Aria"] . "<br>";
        echo @$_GET["Vernice"] . "<br>";
        echo @$_GET["Cristallo"] . "<br>";
        echo @$_GET["Radio-CD"] . "<br>";

        echo "<b>Descrizione Aggiuntiva:</b> " . $descrizione . "<br>";

?>

</body>
</html>