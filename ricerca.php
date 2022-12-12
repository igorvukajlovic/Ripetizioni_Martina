<?php

    echo "Adesso ricercherò il testo che hai scritto<br><br>";

    /**
     * Nel caso in cui il form sia di tipo "get" il valore dell'input viene
     * caricato nel vettore (associativo) globale $_GET con come chiave ha il 
     * valore del campo "name" dell'input.
     */
    $testo = $_GET["ricerca"];

    echo "Ora cerco: ".$testo;
?>