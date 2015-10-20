<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 25/10/2014
 * Time: 02:02
 */
ini_set("display_errors", 1);
define('TEST_INCLUDE', 1);
define ('SITE_BASEPATH', "./");

session_start();
require_once('./include/params_connexion.php');
include_once('./include/dbMapper.php');
include_once('./include/init_errors.php');


try{
    $connexion = new PDO($dns, $user, $password);
}catch(Exception $e){
    echo $e;

}
DBMapper::init($connexion);


include_once('./modules/mod_head/head.php');
include_once('./modules/mod_header/header.php');
$module = isset($_GET['module']) ? $_GET['module'] : "default";
switch($module){
    case "connexion":
    case "compte":
    case "inscription":
        include_once("./modules/mod_".$module."/".$module.".php");
        break;
    default:
        if(!isset($_SESSION['id_user'])){
            include_once("./modules/mod_connexion/connexion.php");
        }else{
            include_once("./modules/mod_alerte/alerte.php");
        }
        break;
}
?>
	
   
	</body>
  
  
  
  
   
</html>





