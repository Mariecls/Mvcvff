<?php
$titre="/donnerNbChambres";
include("_debut.inc.php");
include("_gestionBase.inc.php"); 
include("_controlesEtGestionErreurs.inc.php");

require ('../model/modelconnexion.php');
require('../model/modeldonnerNbChambres.php');
ob_start();
require('../view/vuedonnerNbChambres.php');
$content = ob_get_clean();
echo  $content;
?>
