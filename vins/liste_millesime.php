<?php

/* 
 * Controleur : extraction et afficage de la liste des vins d'un millesime donné
 *      Paramètres :
            GET annee : millesime cherché
 */

// Initialisations
include "lib/init.php";


// Récupération des paramètres (ceux pris en compte par le template
if (isset($_GET["annee"])) {
    $annee = $_GET["annee"];
} else {
    $annee = 0;
}


// Traitement proprement dit
// Créer un objet vin par défaut
$vin = new vin();
$liste = $vin->listeMillesime($annee);

// Afficher le template
include "templates/pages/liste.php";

