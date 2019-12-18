<?php
	require 'Fonctions/mesFonctions.php';

	echo "La date du Jour : ".date('d/M/Y')."<br>";

	echo "Fonction round() <br>";
	$x = 15.56;
	echo "x = $x , arrondi = ".round($x,1);

	$y = rand();
	echo "<br> y = $y";

	$y = rand(15,50);
	echo "<br> y = $y <br>";

	echo "$y Euros = ".round(converEuroCfa($y))." FCFA<br>";

	echo converDollarCfa($y,578);
?>