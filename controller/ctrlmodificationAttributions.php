<?php
$titre="/modificationAttributions";
include("_debut.inc.php");
include("_gestionBase.inc.php"); 
include("_controlesEtGestionErreurs.inc.php");

require ('../model/modelconnexion.php');
require('../model/modelmodificationAttributions.php');
ob_start();
require ('../view/vuemodificationAttributions.php');
$content = ob_get_clean();
echo  $content;
?>
