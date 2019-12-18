<?php
// echo "FOR <br>";
// 	for ($i=1; $i <= 10 ; $i++) { 
// 		echo "i = $i <br>";
// 	}

// echo "WHILE <br>";
// $i=1;
// 	while($i <= 10) { 
// 		echo "i = $i <br>";
// 		$i++;
// 	}

$notes = [10,15.5,17,8,14.5,11];
echo "Affichage du tableau avec For <br>";
for ($i=0; $i < sizeof($notes) ; $i++) { 
	echo $notes[$i]." | ";
}	

echo "<br>Affichage du tableau avec Foreach <br>";

foreach ($notes as $note) {
	echo $note." | ";
}

echo "<br>";
$etudiant1 = array('mat' => 1234, 'nom'=>'DIOP','prenom'=> 'Aicha' );
$etudiant2 = array('mat' => 1235, 'nom'=>'NIANG','prenom'=> 'Aly' );
$etudiant3 = array('mat' => 1236, 'nom'=>'Gaye','prenom'=> 'Laye' );

$etudiants = [$etudiant1,
			   $etudiant2,
			   $etudiant3 ];

for ($i=0; $i < sizeof($etudiants); $i++){
	foreach ($etudiants[$i] as $key => $value) {
		echo "$key => $value <br>";
	}

	for ($j=0; $j < sizeof($etudiants[$i]) ; $j++) { 
		echo $etudiants[$i]['mat']."<br>";
	}
}

?>