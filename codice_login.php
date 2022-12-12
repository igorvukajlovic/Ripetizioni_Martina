<?php

    echo "Adesso verificherò che le credenziali siano corrette.<br><br>";

    /**
     * Quando viene inviato il form "post" il valore di ciò che è stato scritto
     * nell'input viene caricato nel vettore (associativo) globale "$_POST" e 
     * come chiave ha il valore del campo "name" dell'input.
     * es. se in un form post ho scritto un input con name "nome" il testo inserito
     * nel campo lo troverò in $_POST['nome']
     */
    $nome_utente = $_POST['username']; 
    $password = $_POST['password'];

    echo "Ho trovato le credenziali:<br>";
    echo "Nome utente: ".$nome_utente;
    echo "<br>";
    echo "Password: ".$password;
?>