<?php

/* 
 * Controleur de traitement de la création (ajout)
 * 
 *      Paramètres :
 *          POST : les attributs d'un vin (nom, annee, nb)
 */


// Initialisations
include "lib/init.php";


// Récupération des paramètres : les attributs d'un vin, connu et géré par objet vin


// traitement :
// Créer un objet
$vin = new vin();
// Lui demander de récupérer les valeurs de ses attributs dans le POST
$vin->loadFromTab($_POST);
// Demander à l'objet de se créer dans la base de donnée
$vin->insert();

// Afficher la page finale
include "templates/pages/detail_vin.php";
