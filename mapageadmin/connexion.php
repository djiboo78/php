<?php
session_start();
if (isset($_POST['valider'])) {
    if (!empty($_POST['pseudo']) and !empty($_POST['mdp'])) {
       $pseudo_par_defaut ="admin";
       $mdp_par_defaut ="admin1234";

       $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
       $mdp_saisi = htmlspecialchars($_POST['mdp']);

       if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
           $_SESSION['mdp'] = $mdp_saisi;
           header('Location: index.php');

       }else {
          echo "votre mot de pass est incorrect";

       }

     } 
else {
        echo "veuillez compléter tous les champs....";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>espace de conexion admin</title>
    <meta charset="UTF-8">
</head>

<body>
    <form method="POST" action="" align="center">
        <input type="text" name="pseudo" autocomplete="off">
        <br>
        <input typ="password" name="mdp">
        <br><br>
        <input type="submit" name="valider">
    </form>



</body>


</html>