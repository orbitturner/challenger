<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<?php
	var_dump($_POST);
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$age = $_POST['age'];
	echo "Bonjour $nom $prenom <br>";
	echo "Vous avez $age ans <br>"	;

	if ($age < 18) {
		print("Tu es Mineur");
	} else {
		echo "Vous êtes majeur";
	}
?>