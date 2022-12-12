<html>
    <head>
        <title>Fibonacci</title>
    </head>

    <body>
    <?php

        /**
         * DEFINIZIONE
         * 
         * ... la successione di Fibonacci (detta anche successione aurea) è una 
         * successione di numeri interi in cui ciascun numero è la somma dei due
         * precedenti, eccetto i primi due che sono, per definizione, 0 e 1. [...]
         * 
         * fonte: https://it.wikipedia.org/wiki/Successione_di_Fibonacci
         */

        $n = 10;

        $valore_sequenza_attuale = 0;
        $valore_squenza_succesivo = 1;
        $valore_sequenza_successivo_prossimo_giro = 0;

        for($i = 0; $i < $n; $i++)
        {
            echo "Giro ".($i+1)."<br>";

            echo "Valore sequenza attuale: ".$valore_sequenza_attuale."<br>";

            echo "Valore sequenza successivo: ".$valore_squenza_succesivo."<br>";

            $valore_sequenza_successivo_prossimo_giro = $valore_sequenza_attuale + $valore_squenza_succesivo;

            echo "Valore sequenza successivo del prossimo giro: ".$valore_sequenza_successivo_prossimo_giro."<br>";

            // $valore_sequenza viene definito per il prossimo "giro" del ciclo dove corrisponderà a quello che ora è il valore successivo
            $valore_sequenza_attuale = $valore_squenza_succesivo; // definisco che $valore_sequenza corrisponde al valore sucessivo

            $valore_squenza_succesivo = $valore_sequenza_successivo_prossimo_giro; // assume il valore della sequenza precedente

            echo "<br><br>";
        }

    ?>
    </body>
</html>