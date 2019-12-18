<?php
// =====| OPENING DATABASE |=====
require_once '../../controller/bdd.php';

// =======| LOGIN CREDS VERIFICATION |=======
function verifylogin($login, $password){
	global $bdd;
	
	$requete = "SELECT * FROM utilisateurs where Email='$login' AND Pass='$password'";
	return $bdd->query($requete)->fetch();
	//fetch() est une requete qui ne retourne qu'un seul résultat
}
// ===============================================