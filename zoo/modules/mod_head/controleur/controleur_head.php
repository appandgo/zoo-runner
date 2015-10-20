<?php
/**
 * Created by PhpStorm.
 * User: Omar
 * Date: 25/10/2014
 * Time: 13:20
 */
	if (! defined ('TEST_INCLUDE'))
        die ("Vous ne pouvez pas accéder directement à ce fichier");

  	class ControleurHead{
        public static function affichage($moduletitre){
            include_once(HEAD_BASEPATH."vue/vue_head.php");
            include_once(HEAD_BASEPATH."modele/modele_head.php");
            $title = "PaiementEnLigne.fr";

            switch($moduletitre){
                case "connexion":
                    $title = $title. " | Connexion";
                    break;
                case "annonces":
                    $title = $title. " | Alertes des dernières 24 heures";
                    break;
                case "inscription":
                    $title = $title. " | Inscription";
                    break;
                default:
                    $title = $title. " | Accueil";
                    break;
            }
            VueHead::head($title);
        }
    }


?>
