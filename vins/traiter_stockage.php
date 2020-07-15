<?php

/* 
 * Controleur de traitement du stockage : ajouter une certaine quantité de bouteilles d'un vin donné
 * 
 *      Paramètres :
 *          GET id : identifiant du vin dont on veut ajouter des bouteilles
 *          POST qte : quantité à stocker
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
if (isset($_POST["qte"])) {
    $qte = $_POST["qte"];
} else {
    // cas où l'URL ne donne pas l'ID
    $qte = 0;
}

// traitement :
// récupérer l'objet chargé avec le bon vin
$vin = new vin();
$vin->loadById($id);
// Modifier la quantité
$vin->nb += $qte;
// mettre à jour dans la base
$vin->update();

// Afficher la page finale
include "templates/pages/detail_vin.php";