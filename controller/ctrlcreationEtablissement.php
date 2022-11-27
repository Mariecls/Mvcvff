<?php
$titre="/creationEtablissement";
include("_debut.inc.php");
include("_gestionBase.inc.php"); 
include("_controlesEtGestionErreurs.inc.php");



require ('../model/modelconnexion.php');
require('../model/modelcreationEtablissement.php');
ob_start();
require ('../view/vuecreationEtablissement.php');
$content = ob_get_clean();
echo  $content;
?>
