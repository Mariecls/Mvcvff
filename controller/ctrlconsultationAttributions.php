<?php
$titre="/consultationAttributions";
include("_debut.inc.php");
include("_gestionBase.inc.php"); 
include("_controlesEtGestionErreurs.inc.php");
require ('../model/modelconnexion.php');

require('../model/modelconsultationAttributions.php');
ob_start();
require ('../view/vueconsultationAttributions.php');
$content = ob_get_clean();
echo  $content;
?>