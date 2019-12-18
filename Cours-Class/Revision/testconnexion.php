<?php
/**
 * Created by PhpStorm.
 * User: orbit
 * Date: 26/11/2018
 * Time: 13:35
 */
    session_start();    
    $login = $_POST['login'];
    $password = $_POST['pass'];

    if($login == 'orbit' && $password == 'turner') {
        $_SESSION['nom'] = 'TURNER';
        $_SESSION['prenom'] = 'ORBIT';
        header("location:accueil.php");
    }else {
        header("location:index.php?log=fail");
    }
?>
