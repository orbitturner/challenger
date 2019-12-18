<!DOCTYPE html>
<html>
<head>
	<title>Premier Cours</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>

</body>
</html>

<?php
	echo "Tableau Numéroté ou Indexé </br>";
	$tab[0] = 'Orbit Turner';
	$tab[1] = 23;
	echo "<h3>Affichage avec print_r()</h3>";
	print_r($tab);
	echo "<br><h3>Affichage avec var_dump()</h3>";
	var_dump($tab);
	echo "<br><h3>Usage de GET</h3></br>";//$_GET
	var_dump($_GET);
	print "Tableau Associatif</br>";
		$tableau = array (
			'id' => 20,
			'nom' => 'DIOP',
			'prenom' => 'OMZO'
		);
	var_dump($tableau);

	echo '<br>AFFICHAGE D\'UN TABLEAU AVEC $_GET<br>';
	var_dump($_GET);
	echo "Nom Complet";
	var_dump($_GET['nomComplet']);
?>