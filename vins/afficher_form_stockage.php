<?php

/* 
 * Controleur de préparation et d'affichage du formulaire de stockage
 * 
 *      Paramètres :
 *          GET id : identifiant du vin dont on veut prendre des bouteilles
 */


// Initialisations
include "lib/init.php";


// Récupération des paramètres (ceux pris en compte par le template
if (isset($_GET["id"])) {
    $id = $_GET["id"];
} else {
    // cas où l'URL ne donne pas l'ID
    $id = 0;
}


// Traitement proprement dit
// récuperer les données dans la base de données
$vin = new vin();
$vin->loadById($id);


// Affichage de la page finale
include "templates/pages/form_stockage.php";
