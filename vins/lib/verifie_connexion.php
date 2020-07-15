<?php

/* 
 * Programme de vérification de la session (connexion)
 * A inclure dans tous les controlleurs pour lesquels la connexion est obligatoire
 * (juste après l'initialisation)
 * Met fin au PHP (ne rend pas la main) si on on  est pas connecté
 * 
 * Il s'appuie sur la variable $_SESSION dans laquel on aura l'index "connecte" valaant true si on est connecté
 * 
 */


// On teste si on est connecté ou pas
if (empty($_SESSION["connecte"])) {
    // la valeur true pour $_SESSION["connecte"] ne timbe pas ici (false ou pas initialisé retourneront vrai)
    // On n'est donc pas connecté
    
    // Aller sur la page de connexion
    include "templates/pages/login.php";
    // on sort
    exit;
    
} 
// Si on est connecté on continue normalement