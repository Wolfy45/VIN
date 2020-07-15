<?php
    /*
     * Template de la page qui affiche une liste de vins
     * 
     * Paramètres :
     *      $liste : liste des vins à afficher(tableau simple d'objets vin)
     * 

     */


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mes vins</title>
    </head>
    <body>
        <h1>Mes vins</h1>
        <a href="afficher_form_ajout.php">Ajouter un vin</a>&nbsp;
        <a href="liste_nul.php">Vins à renouveler</a>&nbsp;
       <form method="get" action="liste_millesime.php">
           Millesime : 
            <input type="number" name="annee">
            <input type="submit" value="chercher">
        </form>
        <table>
            <tr>
                <th>Nom</th>
                <th>Millesime</th>
                <th>Quantité</th>
            </tr>
            <?php // Afficher les lignes de la table : pour chaque objet du tableau $liste 
            foreach($liste as $vin) {
                ?>
                <tr>
                    <td><a href="afficher_vin.php?id=<?= $vin->id ?>" ><?= htmlentities($vin->nom) ?></a></td>
                    <td><?= htmlentities($vin->annee) ?></td>
                    <td><?= htmlentities($vin->nb) ?></td>                
                </tr>
                
                <?php   
            }
            ?>
        </table>
    </body>
</html>
