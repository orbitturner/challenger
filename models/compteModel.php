<?php
session_start();

    require_once('../controller/bdd.php');

    function createUser($Email, $Password, $Nom, $Prenom, $Pseudo, $date_naissance, $sexe, $pays, $tel, $adresse, $code_postal, $date_creation, $profil){
        global $bdd;

        $req = "INSERT INTO utilisateurs VALUES ( NULL, '$Email', '$Password', '$Nom', '$Prenom', '$Pseudo', '$date_naissance', '$sexe', '$pays', '$tel', '$adresse', '$code_postal', '$date_creation', '$profil')"; 
        
        return $bdd->exec($req);


    }
?>