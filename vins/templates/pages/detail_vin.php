<?php
    /*
     * Template de la page qui affiche le détail d'un vin
     * 
     * Paramètres :
     *      $vin : objet vin à afficher
     * 
     * 
     * 
     * 
     * Détail :
     *      titre : nom du vin
     *      h2 : millesime
     *      pragarphe : qte
     * 
     *      bouton : prélever
     */


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= htmlentities($vin->nom) ?></title>
    </head>
    <body>
        <h1><?= htmlentities($vin->nom) ?></h1>
        <h2>Millesime : <?= htmlentities($vin->annee) ?></h2>
        <p>Quantité dans la cave : <b><?= htmlentities($vin->nb) ?></b></p>
        <a href="afficher_form_prelevement.php?id=<?= $vin->id ?>">Prendre des bouteilles</a>&nbsp;&nbsp;
        <a href="afficher_form_stockage.php?id=<?= $vin->id ?>">Ajouter des bouteilles</a>&nbsp;&nbsp;
        <a href="afficher_form_modif.php?id=<?= $vin->id ?>">Corriger la description</a>
    </body>
</html>
