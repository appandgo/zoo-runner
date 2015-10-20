<?php
/**
 * Created by PhpStorm.
 * User: Omar
 * Date: 25/10/2014
 * Time: 13:19
 */
	if (! defined ('TEST_INCLUDE'))
        die ("Vous ne pouvez pas accéder directement à ce fichier");


	define("MOD_BASEPATH", "modules/mod_connexion/");

	include_once(MOD_BASEPATH."controleur/controleur_connexion.php");
	ControleurConnexion::propositionConnexion();
	/*if(isset($_GET['action'])){
        switch($_GET['action']){
            case "connect" :
                ControleurConnexion::connexion();
                break;
            default:
                break;
        }
    }*/

?>
