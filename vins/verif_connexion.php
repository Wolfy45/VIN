<?php

// Initialisation
include "lib/init.php";



// Récupérer les paramètres saisis
if (isset($_POST["login"])) {
    $login = $_POST["login"];
} else {
    $login = "";
}
if (isset($_POST["pwd"])) {
    $pwd = $_POST["pwd"];
} else {
    $pwd = "";
}

// Traitement : vérifier si le code et le mot de passe sont bons
if ($login === "admin" and $pwd === "123456" ) {
    // Connexion réussie :
    // Indiquer que l'on est connecté
    $_SESSION["connecte"] = true;
    // Aller à la page d'accueil : redirection sur la page d'acceuil
    header("location: liste_millesime.php");           // Pas de echo fait avant de faire header, cela doit être avant tout contenu
    exit;  
} else {
    // Connexion éhouée
    // Indiqué que l'on est pas connecté
     $_SESSION["connecte"] = false;
    // Réafficher le formulaire de connexion
    include "templates/pages/login.php";
    exit;
}


