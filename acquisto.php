<?php
	echo "Procedo all'acquisto<br><br>";

	$quantita = $_POST['quantita'];
	$articolo = $_POST['nome'];
	$prezzo = $_POST['prezzo'];

	$spese_sped = 5;

	echo "Stai comprando $quantita pz. dell'articolo $articolo <br>";
	echo "Costo ".$prezzo."&euro; al pezzo<br>";
	echo "Le spese di spedizione ammontano a $spese_sped&euro;<br><br>	";

	$totale = $prezzo * $quantita + $spese_sped;

	echo "Totale: <b>$totale&euro;</b>";

	echo "<button>Conferma l'acquisto</button>";
?>