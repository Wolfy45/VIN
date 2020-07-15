<?php

/*
 * Classe gérant les utilisateur pour se connecter (table : utilisateur_vin)
 */


class utilisateur_vin {
    // Attributs 
    public $id = "";
    public $nom = "";
    public $prenom = "";
    public $email = "";
    public $pwd = "";

   
    public function loadFromTab($tab) {
        // Rôle : charger les attributs à partir des valeurs dans un tableau
        // Retour : true si ok, false en cas d'erreur
        // Paramétres : 
        //      $tab : tableau dont les index sont des noms de champ de cette table, et les valeurs la valeur à donner
        
        foreach( [ "id", "nom", "prenom", "email", "pwd"] as $champ) {
            if (isset($tab[$champ])) {
                $this->$champ = $tab[$champ];
            }
        }
        return true;
        
    }
    
    public function checkLogin($login, $password) {
        // Rôle : vérifier si il y a un utilisateur correspondant au login et mot de passe
        //              (et le charger dans l'objet courant si oui)
        // Retour : true si on le trouve, false sinon
        // Paramètres :
        //      $login : email (login) de connexion
        //      $password (pwd): mot de passe
        
        if ( ! $this->loadByCode($login)) {
            return false;           // On n'a pas trouvé de login avec ce code
        }
        if ($this->password === $password) {
            return true;
        } else {
            return false;
        }
        
        
    }
    
    
    // *************************************
    // Méthodes d'accès à la base de données
    // *************************************
    
    public function loadByEmail($email) {
        // Rôle : charger l'objet courant à partir de celui dont l'email est $email
        // Retour : true si on a trouvé, false sinon
        // Paramètres :
        //      $email : valeur du code cherché
        
        // Requête et paramètres de la requête
        $sql = "SELECT * FROM `utilisateur_vin` WHERE `email` = :email";
        $param = [
            ":email" => $email
        ];
        // Préparer le requête
        global $bdd;
        $req = $bdd->prepare($sql); 
        // Exécuter la requête
        if ( ! $req->execute($param)) {
            // Erreur requête
            echo "Erreur technique sur la requête : $sql";
            return false;
        }
        
        // récupérer la première ligne de résultat (et ligne unique si elle existe)
        $ligne = $req->fetch(PDO::FETCH_ASSOC); 
        
        // Si la ligne est vide (valeur false retournée par fetch) : pas de ligne trouvée avec cet email
        if (empty($ligne)) {
            // On signale que l'on n'a pas trouvé, en retournant false
            return false;
        }
        
        // On met à jour les attributs
        return $this->loadFromTab($ligne);
     
    }
    
       
    
    
}


