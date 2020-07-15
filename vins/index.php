<?php

/* 
 * Controleur : page d'accueil, affiche la liste de tous les vins
 * 
 *      Paramètres :
            néant
 */

// Initialisations
include "lib/init.php";


// Récupération des paramètres (ceux pris en compte par le template
//      néant


// Traitement proprement dit
// Créer un objet vin par défaut
$vin = new vin();
$liste = $vin->listeTout();

// Afficher le template
include "templates/pages/liste.php";

