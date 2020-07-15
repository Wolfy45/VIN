<?php
    /*
     * Template de la page qui affiche formulaire de prélèvement
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
        <title>Prélèvement: <?= htmlentities($vin->nom) ?></title>
    </head>
    <body>
        <h1>Prélèvement: <?= htmlentities($vin->nom) ?></h1>
        <p>Millesime : <b><?= htmlentities($vin->annee) ?></b></p>
        <p>Quantité disponible : <b><?= htmlentities($vin->nb) ?></b></p>
        <form method="post" action="traiter_prelevement.php?id=<?= $vin->id ?>">
            <label for="qte">Combien de bouteilles prenez-vous ? </label>
            <input type="number" id="qte" name="qte" min="0" max="<?= htmlentities($vin->nb) ?>" value="1" />
            <input type="submit" value="déstocker"/>
        </form>
    </body>
</html>
