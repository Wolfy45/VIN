<?php

/* 
 * Toutes les actions d'initialisation des controleurs
 *
 */


// Affichage des messages d'erreur
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2) Inclure les librairies de fonctions (chargement des fonctions)


// 3) Inclure les classes
include "classes/vin.php";
include "classes/utilisateur_vin";

// 4) Ouvrir la base de données
global $bdd;        // Crée ou récupère la variable globale 
$bdd = new PDO("mysql:host=localhost;dbname=bdd_name;charset=UTF8", "login", "password");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);        // Que en phase de développement