<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 25/10/2014
 * Time: 13:20
 */
	if (! defined ('TEST_INCLUDE'))
        die ("Vous ne pouvez pas accéder directement à ce fichier");

  	class ControleurInscription{
        public static function affichage(){
            include_once(MOD_BASEPATH."vue/vue_inscription.php");
            include_once(MOD_BASEPATH."modele/modele_inscription.php");
            
            if(!isset($_SESSION['id_user']))
                if(!isset($_GET['action']) OR (isset($_GET['action']) && $_GET['action'] != "inscrire") )
                	VueInscription::menuInscription();
            else 
                VueInscription::erreurMenuInscription();
        }
        public static function ajouterPersonne(){
        	if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']))
        	{
                $pseudonyme = $_POST['pseudo'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                if(ModeleInscription::ajouterMembre($pseudonyme, $email, $password))
                {
                    VueInscription::inscriptionEnCours();
                }else
                {
                    Vueinscription::erreurInscription();
                    Vueinscription::menuInscription();
                }
            }else
                VueInscription::menuInscription();
        }
    }


?>
