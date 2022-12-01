<html>
    <head>
        <title>Esercizio 1</title>
    </head>

    <body>
        <h1>Esercizio 1</h1>
    <?php
        /**
         * Testo esercizio
         * 
         * Definita una variabile $max scrivere tutti i numeri da 0 fino a $max
         * in tre modi: utilizzando un ciclo FOR, un ciclo WHILE e un ciclo DO
         * WHILE
         */

        $max = 10; // numero di iterazioni da eseguire.
        
        /**
         * Il ciclo "for" viene utilizzato quado è conosciuto il numero di 
         * iterazioni che dovranno essere eseguite; ovvero il numero di volte 
         * che il codice contenuto tra le parentesi graffe dovrà essere 
         * interpretato.
         */
        echo("Ciclo for: <br>");
        for($i = 0; $i < $max; $i++)
        {
            echo($i);
        }
        
        echo "<br /> <br />";
        
        /**
         * Il ciclo "while" viene utilizzato quando non si conosce il numero di 
         * iterazioni da eseguire, ad esempio nel caso si vogliano leggere tutte le
         * righe di un file di testo.
         */
        echo("Ciclo while: <br>");
        $i = 0;
        while($i < $max)
        {
            echo($i);
            $i++;
        }
        
        echo "<br /><br />";
        
        /**
         * Il ciclo "do while" assomiglia al ciclo "while", ma viene utilizzato 
         * quando si sa che il codice deve essere eseguito almeno una volta.
         */
        echo("Ciclo do while: <br>");
        $i = 0;
        do {
            echo($i);
            $i++;
        } while($i < $max);
        
        ?>
    </body>
</html>