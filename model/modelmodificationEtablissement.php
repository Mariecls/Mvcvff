<?php
$tabCivilite=array("M.","Mme","Melle");  

$id=$_REQUEST['idEtab'];
$action=$_REQUEST['action'];

if ($action=='demanderModifEtab')
{
   $req=obtenirDetailEtablissement($connexion, $id);
  
   foreach ($req as $row) {
      $nom=$row['nom'];
      $adresseRue=$row['adresseRue'];
      $codePostal=$row['codePostal'];
      $ville=$row['ville'];
      $tel=$row['tel'];
      $adresseElectronique=$row['adresseElectronique'];
      $type=$row['type'];
      $civiliteResponsable=$row['civiliteResponsable'];
      $nomResponsable=$row['nomResponsable'];
      $prenomResponsable=$row['prenomResponsable'];
      $nombreChambresOffertes=$row['nombreChambresOffertes'];
   }
}
else
{
   $nom=$_REQUEST['nom']; 
   $adresseRue=$_REQUEST['adresseRue'];
   $codePostal=$_REQUEST['codePostal'];
   $ville=$_REQUEST['ville'];
   $tel=$_REQUEST['tel'];
   $adresseElectronique=$_REQUEST['adresseElectronique'];
   $type=$_REQUEST['type'];
   $civiliteResponsable=$_REQUEST['civiliteResponsable'];
   $nomResponsable=$_REQUEST['nomResponsable'];
   $prenomResponsable=$_REQUEST['prenomResponsable'];
   $nombreChambresOffertes=$_REQUEST['nombreChambresOffertes'];

   verifierDonneesEtabM($connexion, $id, $nom, $adresseRue, $codePostal, $ville,  
                        $tel, $nomResponsable, $nombreChambresOffertes);      
   if (nbErreurs()==0)
   {        
      modifierEtablissement($connexion, $id, $nom, $adresseRue, $codePostal, $ville, 
                            $tel, $adresseElectronique, $type, $civiliteResponsable, 
                            $nomResponsable, $prenomResponsable, $nombreChambresOffertes);
   }
}
?>