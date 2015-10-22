<?php
    require_once("model.php");
require_once("ModeleBDD.php");

$bdd = bdd();
if (isset($_POST['login']) && ($_POST['password'])) {
    $login = $_POST['login'];
    $Password = sha1($_POST['password']);
    

    $connexion = new Connexion($login, $Password);// c'est ici que sa bloque!
    $verif = $connexion->verification_connexion();
     
    if ($verif == "ok") {
        if ($connexion->session()) {
            header('Location: index');
        }
    } else {
        $erreur = $verif;
        return $erreur;
    }
}

?>