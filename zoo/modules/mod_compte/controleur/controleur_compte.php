<?php
/**
 * Created by PhpStorm.
 * User: Omar
 * Date: 25/10/2014
 * Time: 13:20
 */
	if (! defined ('TEST_INCLUDE'))
        die ("Vous ne pouvez pas accéder directement à ce fichier");

  	class ControleurCompte{
        public static function compte(){
            
        	
        	include_once(MOD_BASEPATH."vue/vue_compte.php");
        	include_once(MOD_BASEPATH."modele/modele_compte.php");

            if(!isset($_SESSION['id_user']))
                VueCompte::erreurPasConnecte();
            else 
            {
                if(isset($_GET['do']) && $_GET['do']=="modifier")
                {

                    if(ModeleCompte::modifier())
                        VueCompte::erreurModificationImpossible();
                    else
                        VueCompte::modificationEnCours();

                }else
                    VueCompte::afficherInformations();
            }
        }

    }


?>
