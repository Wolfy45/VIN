<?php

/* 
 * Controleur de traitement du stockage : modifier nom et millesime
 * 
 *      Paramètres :
 *          GET id : identifiant du vin dont on veut ajouter des bouteilles
 *          POST champs modifiables : nom, millesime
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

// traitement :
// récupérer l'objet chargé avec le bon vin
$vin = new vin();
$vin->loadById($id);
// Modifier les valeurs en fonction des saisies
$vin->loadFromTab($_POST);
// mettre à jour dans la base
$vin->update();

// Afficher la page finale
include "templates/pages/detail_vin.php";