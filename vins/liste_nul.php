<?php

/* 
 * Controleur : extraction et afficage de la liste des vins avec stock positif
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
$liste = $vin->listeNul();

// Afficher le template
include "templates/pages/liste.php";

