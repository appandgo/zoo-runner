<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 25/10/2014
 * Time: 13:20
 */
if (! defined ('TEST_INCLUDE'))
    die ("Vous ne pouvez pas accéder directement à ce fichier");

require_once ('outlis/CadreVert.php');


class VueInscription{
    public static function menuInscription(){
        CadreVert::ouvertureDiv();
		?>
			<form class="form-horizontal" method="post" action="index.php?module=inscription&action=inscrire">
				<fieldset>
				
				<!-- Form Name -->
				<legend>Rentrer dans le club</legend>
				
				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="pseudo">Pseudo</label>
				  <div class="controls">
				    <input id="pseudo" name="pseudo" placeholder="" class="input-xlarge" required="" type="text">
				    
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="email">email</label>
				  <div class="controls">
				    <input id="email" name="email" placeholder="" class="input-xlarge" required="" type="text">
				    
				  </div>
				</div>
				
				<!-- Password input-->
				<div class="control-group">
				  <label class="control-label" for="mdp">mot de passe</label>
				  <div class="controls">
				    <input id="password" name="password" placeholder="" class="input-xxlarge" required="" type="password">
				    
				  </div>
				</div>
				
				<!-- Button -->
				<div class="control-group">
				  <label class="control-label" for="submit"></label>
				  <div class="controls">
				    <button id="submit" type="submit" name="submit" class="btn btn-primary">Inscription</button>
                    <a href="index.php?module=connexion" class="btn btn-primary">J'ai déjà un compte</a>
				  </div>
				</div>
				
				</fieldset>
			</form>
		<?php 
		CadreVert::fermetureDiv();
    }

    public static function inscriptionEnCours(){
		echo "<div class=\"wait\">
               Compte en cours de création, veuillez patienter. <a href=\"index.php?module=connexion\">Cliquez ici si vous n'êtes pas redirigé automatiquement</a>
        </div>";
    }
    public static function erreurInscription(){
       ?>
 			<div class="alert alert-danger erreur" role="alert">Impossible de créer le compte, cet email ou ce pseudonyme est déjà utilisé.</div>
       <?php 

    }


    public static function erreurMenuInscription(){


    }
}
?>
