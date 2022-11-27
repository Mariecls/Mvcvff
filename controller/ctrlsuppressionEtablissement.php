<?php
$titre="/suppressionEtablissement";
include("_debut.inc.php");
include("_gestionBase.inc.php"); 
include("_controlesEtGestionErreurs.inc.php");

require ('../model/modelconnexion.php');
require('../model/modelsuppressionEtablissement.php');
ob_start();
require ('../view/vuesuppressionEtablissement.php');
$content = ob_get_clean();
echo  $content;
?>