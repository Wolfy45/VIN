<?php

/* 
 * Controleur de préparation et d'affichage du formulaire d'ajout
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



// Affichage de la page finale
include "templates/pages/form_ajout.php";
