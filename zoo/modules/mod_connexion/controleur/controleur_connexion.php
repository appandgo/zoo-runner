<?php
/**
 * Created by PhpStorm.
 * User: Omar
 * Date: 25/10/2014
 * Time: 13:20
 */
	if (! defined ('TEST_INCLUDE'))
        die ("Vous ne pouvez pas accéder directement à ce fichier");

  	class ControleurConnexion{
        public static function propositionConnexion(){
            
        	
        	include_once(MOD_BASEPATH."vue/vue_connexion.php");
        	include_once(MOD_BASEPATH."modele/modele_connexion.php");
            if(!isset($_SESSION['id_user'])){
                if(isset($_GET['action']) && $_GET['action'] == "connect"
                && isset($_POST['email'])
                    && isset($_POST['mdp'])
                ) {
                    if(ModeleConnexion::connexion($_POST['email'], $_POST['mdp'])){
                        VueConnexion::connexionEnCours();
                    }else{

                        VueConnexion::erreurConnexionImpossible();
                        VueConnexion::propositionConnexion();
                    }
                }else {
                    VueConnexion::propositionConnexion();
                }
            }
            else {
                if(isset($_GET['action']) && $_GET['action'] == "disconnect"){
                    VueConnexion::deconnexionEnCours();
                    ModeleConnexion::deconnexion();

                }else {
                    VueConnexion::erreurDejaConnecté();
                }
            }
        }

    }


?>
