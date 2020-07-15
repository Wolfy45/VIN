<?php
    /*
     * Template de la page qui affiche formulaire d'ajout
     * 
     * Paramètres :
     *      $vin : objet vin initialisé par défaut
     * 
     * 
     */


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ajout d'un vin</title>
    </head>
    <body>
        <h1>Ajout d'un vin</h1>
        <form method="post" action="traiter_ajout.php">
            <label for="nom">Nom : </label>
            <input type="text" id="nom" name="nom" value="<?= htmlentities($vin->nom) ?>" /><br/>
            <label for="annee">Millésime : </label>
            <input type="number" id="annee" name="annee" min="1000" value="<?= htmlentities($vin->annee) ?>" /><br/>
            <label for="nb">Quantité : </label>
            <input type="number" id="nb" name="nb" min="0" value="<?= htmlentities($vin->nb) ?>" /><br/>
            <input type="submit" value="Créer"/>
        </form>
    </body>
</html>
