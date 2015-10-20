<?php
/**
 * Created by PhpStorm.
 * User: Omar
 * Date: 25/10/2014
 * Time: 13:19
 */
	if (! defined ('TEST_INCLUDE'))
        die ("Vous ne pouvez pas accéder directement à ce fichier");


	define("HEADER_BASEPATH", "modules/mod_header/");

	include_once(HEADER_BASEPATH."controleur/controleur_header.php");
	ControleurHeader::affichage();

?>
