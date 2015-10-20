<?php
/**
 * Created by PhpStorm.
 * User: Omar
 * Date: 25/10/2014
 * Time: 13:20
 */
	if (! defined ('TEST_INCLUDE'))
        die ("Vous ne pouvez pas accéder directement à ce fichier");

  	class ControleurHeader{
        public static function affichage(){
            include_once(HEADER_BASEPATH."vue/vue_header.php");
            include_once(HEADER_BASEPATH."modele/modele_header.php");
            VueHeader::affichageBanniere();
            if(!isset($_SESSION['id_user']))	{
                VueHeader::affichageNavigateurNonConnecte();
            }
            else {
                VueHeader::affichageNavigateurConnecte($_SESSION['id_user'], $_SESSION['pseudo']);
            }
        }

    }


?>
