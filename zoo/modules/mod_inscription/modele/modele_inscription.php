<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 25/10/2014
 * Time: 13:20
 */
	if (! defined ('TEST_INCLUDE'))
        die ("Vous ne pouvez pas accéder directement à ce fichier");

	class ModeleInscription extends DBMapper{
	
        static function ajouterMembre($pseudonyme, $email, $password){
        
            $password = md5($password);
            $query = "INSERT INTO user (pseudo, mdp, dateEnregistrement, dateDerniereConnexion, email, confiance) VALUES (?,?, CURRENT_DATE, CURRENT_DATE, ?, 0)";
            $req = self::$database->prepare($query);
            
            return ($req->execute(array($pseudonyme, $password,$email)));
        }
    }
?>
