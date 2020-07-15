<?php
    /*
     * Template de la page qui affiche formulaire de stockage
     * 
     * Paramètres :
     *      $vin : objet vin à afficher
     * 
     * 
     * 
     * 
     * Détail :
     *      titre : prèlèvement de :nom du vin
     *      paragraphe : millesime
     *      pragarphe : qte
     * 
     * formulaire :
     *          champ de saisie : qté
     * 

     */


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Stockage: <?= htmlentities($vin->nom) ?></title>
    </head>
    <body>
        <h1>Stockage: <?= htmlentities($vin->nom) ?></h1>
        <p>Millesime : <b><?= htmlentities($vin->annee) ?></b></p>
        <p>Quantité disponible : <b><?= htmlentities($vin->nb) ?></b></p>
        <form method="post" action="traiter_stockage.php?id=<?= $vin->id ?>">
            <label for="qte">Combien de bouteilles ajoutez-vous ? </label>
            <input type="number" id="qte" name="qte" min="0" value="6" />
            <input type="submit" value="Ajouter"/>
        </form>
    </body>
</html>
