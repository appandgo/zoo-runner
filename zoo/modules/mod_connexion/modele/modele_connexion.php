<?php
/**
 * Created by PhpStorm.
 * User: Omar
 * Date: 25/10/2014
 * Time: 13:20
 */
	if (! defined ('TEST_INCLUDE'))
        die ("Vous ne pouvez pas accéder directement à ce fichier");

	class ModeleConnexion extends DBMapper{
        static function connexion($email, $mdp){
            $mdp = md5($mdp);
            $query ="SELECT * from user where email=? and mdp = ?";
            $req = self::$database->prepare($query);
            $req->execute(array($email, $mdp));

            if($req->rowCount() == 1){
                $query = $req->fetch(PDO::FETCH_OBJ);
                $_SESSION['id_user'] = $query->id_user;
                $_SESSION['pseudo'] = $query -> pseudo;
                $_SESSION['email'] = $query->email;
                $_SESSION['confiance'] = $query->confiance;
                $_SESSION['dateDerniereConnexion'] = $query->dateDerniereConnexion;
                $query = "UPDATE user SET dateDerniereConnexion = NOW() where id_user = ".$_SESSION['id_user'];
                self::$database->query($query);
                return true;
            }
            return false;

        }
        static function deconnexion(){
            session_destroy();
        }


    }








?>
