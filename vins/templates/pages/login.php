<?php

/*
 * Template de la page de saisie des codes de connexion
 * 
 * Paramètres : néant
 * 
 */

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Connexion à l'application</title>
    </head>
    <body>
        <h1>Saisir les identifiants de connexion</h1>
        <form method="post" action="verif_connexion.php">
            <label for="login">E-mail : </label>
            <input type="text" id="login" name="login"/><br>
            <label for="pwd">Mot de passe : </label>
            <input type="password" id="pwd" name="pwd"/><br> 
            <input type="submit" value="Se Connecter"/>
        </form>
    </body>
</html>
