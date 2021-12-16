<?php
session_start();
if(!$_SESSION['mdp']){
    header('location:connexion.php');
}


?>