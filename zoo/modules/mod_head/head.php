<?php
/**
 * Created by PhpStorm.
 * User: Omar
 * Date: 25/10/2014
 * Time: 13:19
 */
	if (! defined ('TEST_INCLUDE'))
        die ("Vous ne pouvez pas accéder directement à ce fichier");


	define("HEAD_BASEPATH", "modules/mod_head/");
	include_once(HEAD_BASEPATH."controleur/controleur_head.php");
    $moduletitre = isset($_GET['module']) ? $_GET['module'] : "default";
    ControleurHead::affichage($moduletitre);

?>
