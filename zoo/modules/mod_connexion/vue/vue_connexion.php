<?php
/**
 * Created by PhpStorm.
 * User: Omar
 * Date: 25/10/2014
 * Time: 13:20
 */
if (! defined ('TEST_INCLUDE'))
    die ("Vous ne pouvez pas accéder directement à ce fichier");


require_once ('outlis/CadreVert.php');
?>

 
	
	
<?php 
class VueConnexion{

    public static function propositionConnexion(){
        CadreVert::ouvertureDiv()
        ?>
		        	<form class="form-horizontal" method="post" action="index.php?module=connexion&action=connect">
				        <fieldset>

				        <!-- Form Name -->
				        <legend>Connexion</legend>
				        <!-- Text input-->
				        <div class="control-group">
				        <label class="control-label" for="email">Adresse e-mail</label>
				        <div class="controls">
				        <input id="email" name="email" placeholder="monmail@mail.fr" class="input-xlarge" required="" type="text">
				        
				        </div>
				        </div>
				        
				        <!-- Password input-->
				        <div class="control-group">
				        <label class="control-label" for="mdp">Mot de passe</label>
				        <div class="controls">
				        <input id="mdp" name="mdp" placeholder="" class="input-xlarge" required="" type="password">
				        
				        </div>
				        </div>
				        
				        <!-- Button -->
				        <div class="control-group">
				        <label class="control-label" for=""></label>
				        <div class="controls">
				         
				        <button value="Se connecter" id="" type="submit" class="btn btn-primary">Connexion</button>
                        <a href="index.php?module=inscription" class="btn btn-primary">Je n'ai pas de compte</a>
				        </div>
				        </div>
				        
				        </fieldset>
       			</form>
   <?php
   		CadreVert::fermetureDiv();
    }
    
    
    public static function connexionEnCours(){

        ?><div class="alert alert-success wait" role="alert">Connexion en cours, <a href="index.php">cliquez ici si vous n'êtes pas redirigé automatiquement</a></div>
        <META HTTP-EQUIV="Refresh" CONTENT="1; URL=index.php">
        <?php 

    }
    
    public static function erreurConnexionImpossible(){
		?>
           <div class="alert alert-danger erreur" role="alert">Echec de la connexion, email/mot de passe non reconnu </div>
		<?php 
    }


    public static function erreurDejaConnecté(){
		?>
            	<div class="alert alert-danger erreur" role="alert">
               		Une erreure c'est produite. Vous ne pouvez accéder à ce menu si vous êtes déjà connecté.</br>
                	<a href="index.php">Revenir à l'accueil</a>
                </div>


        <META HTTP-EQUIV="Refresh" CONTENT="1; URL=index.php">
        <?php 
    }

    public static function deconnexionEnCours(){
		?>
		<div class="alert alert-success wait" role="alert">
			Vous allez être déconnecté, <a href="index.php">cliquez ici si vous n'êtes pas redirigé automatiquement</a>
		</div>
		<?php
    }
    
    
    
    
}
?>
