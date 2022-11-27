<?php
$titre="/detailEtablissement";
   
include("_debut.inc.php");
include("_gestionBase.inc.php"); 
include("_controlesEtGestionErreurs.inc.php");
   

require ('../model/modelconnexion.php');
require ('../model/modeldetailEtablissement.php');
ob_start();
require ('../view/vuedetailEtablissement.php');
$content = ob_get_clean();
echo  $content;
?>