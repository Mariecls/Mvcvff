<?php 
$titre="/modificationEtablissement";
include("_debut.inc.php");
include("_gestionBase.inc.php"); 
include("_controlesEtGestionErreurs.inc.php");

require ('../model/modelconnexion.php');
require('../model/modelmodificationEtablissement.php');
ob_start();
require ('../view/vuemodificationEtablissement.php');
$content = ob_get_clean();
echo  $content;
?>