<?php
echo "Tableau Numéroté ou indexé <br>";
	$tab[0] = 'aicha';
	$tab[1] = 15;
	echo "affichage avec print_r()<br>";
	print_r($tab);
	echo "<br>affichage avec var_dump()";
	var_dump($tab);
echo "Tableau associatif<br>";
	$tableau = array('id' => 20, 
					 'nom' => 'DIOP',
					 'prenom' => 'Astou'	
					 );
	var_dump($tableau);

	echo '<br> affichage d\'un tableau $_GET';
	var_dump($_GET);
	echo "Nom Complet";
	var_dump($_GET['nomComplet']);

	echo '<br> affichage $_SERVER';
	var_dump($_SERVER);


?>