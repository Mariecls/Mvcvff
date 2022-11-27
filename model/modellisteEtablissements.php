<?php
function lgEtab($connexion){
$req=obtenirReqEtablissements($connexion);
$rsEtab=$connexion->query($req);
return $rsEtab->fetchAll();
}
$lgEtab  = lgEtab($connexion)  ;
?>


