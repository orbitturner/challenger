<?php 
    require_once('../models/compteModel.php');
    if (isset($_POST['signUp'])) {
        extract($_POST);
        var_dump($_POST);
        $date_creation = Date('(D): d-m-Y')." à ".Date("H:i:s");

        $row = createUser($Email, $Password, strtoupper($Nom), $Prenom, $Pseudo, $date_naissance, $sexe, $pays, $tel, $adresse, $code_postal, $date_creation, $profil);

    }

?>
