<?php

/* 
 * Controleur de traitement du prélèvement : retirer une certaine quantité de bouteilles d'un vin donné
 * 
 *      Paramètres :
 *          GET id : identifiant du vin dont on veut prendre des bouteilles
 *          POST qte : quantité à prélever
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
// On demande à l'objet de faire le prélèvement (si il échoue on réaffiche le formulaire
if ( $vin->preleve($qte) === false ) {
    // On ne peut pas prélever
    // On réaffiche le formulaire :
    include "templates/pages/form_prelevement.php";
    exit;
}
// mettre à jour dans la base
$vin->update();

// Afficher la page finale
include "templates/pages/detail_vin.php";