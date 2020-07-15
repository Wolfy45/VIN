<?php
    /*
     * Template de la page qui affiche formulaire de modificatin d'un vin (nom et millesime)
     * 
     * Paramètres :
     *      $vin : objet vin à modifier
     * 
     * 
     * 

     */


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= htmlentities($vin->nom) ?></title>
    </head>
    <body>
        <form method="post" action="traiter_modif.php?id=<?= $vin->id ?>">
            <label for="nom">Nom : </label>
            <input type="text" id="nom" name="nom" value="<?= htmlentities($vin->nom) ?>" /><br/>
            <label for="annee">Millésime : </label>
            <input type="number" id="annee" name="annee" min="1000" value="<?= htmlentities($vin->annee) ?>" /><br/>
            <input type="submit" value="Modifier"/>
        </form>
    </body>
</html>
