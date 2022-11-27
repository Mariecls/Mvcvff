<?php
$titre="/listeEtablissement";
include("_debut.inc.php");
include("_gestionBase.inc.php"); 
include("_controlesEtGestionErreurs.inc.php");

require ('../model/modelconnexion.php');
require ('../model/modellisteEtablissements.php');
ob_start();
require ('../view/vuelisteEtablissements.php');
$content = ob_get_clean();
echo  $content;

?>