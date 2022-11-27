<table width='80%' cellpadding='0' cellspacing='0' align='center'>
	<tr>
		<td align='center'>
			<a href='../index.php'>Accueil ></a>
			<a href='ctrllisteEtablissements.php'> listeEtablissements ></a>
			 creationEtablissement
		</td>
	</tr>
</table>
<br>
<?php if ($_REQUEST['action']=='demanderCreEtab') : ?>
<form method='POST' action='ctrlcreationEtablissement.php?'>
	<input type='hidden' value='validerCreEtab' name='action'>
	<table width='85%' align='center' cellspacing='0' cellpadding='0'class='tabNonQuadrille'>
		<tr class='enTeteTabNonQuad'>
			<td colspan='3'>
				<?php endif ?>
		

<form method='POST' action='ctrllisteEtablissements.php?action=creationEtablissement&amp;modif=validerCreEtab'>
   <input type='hidden' value='validerCreEtab' name='modif'>
   <table width='85%' align='center' cellspacing='0' cellpadding='0' 
   class='tabNonQuadrille'>
   
      <tr class='enTeteTabNonQuad'>
         <td colspan='3'>Nouvel établissement</td>
      </tr>
      <tr class='ligneTabNonQuad'>
         <td> Id*: </td>
         <td><input type='text' value=<?=$id?> name='id' size ='10' 
         maxlength='8'></td>
      </tr>
     
            <tr class="ligneTabNonQuad">
         <td> Nom*: </td>
         <td><input type="text" value="<?=$nom?>" name="nom" size="50" 
         maxlength="45"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> Adresse*: </td>
         <td><input type="text"  value="<?=isset($_REQUEST['$adresseRue'])?$_REQUEST['$adresseRue']:' '?>" name="adresseRue"
         size="50" maxlength="45"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> Code postal*: </td>
         <td><input type="text" value="<?=isset($_REQUEST['$codePostal'])?$_REQUEST['$codePostal']:' '?>" name="codePostal" 
         size="4" maxlength="5"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> Ville*: </td>
         <td><input type="text" value="<?=isset($_REQUEST['$ville'])?$_REQUEST['$ville']:' '?>" name="ville" size="40" 
         maxlength="35"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> Téléphone*: </td>
         <td><input type="text" value="<?=isset($_REQUEST['$tel'])?$_REQUEST['$tel']:' '?>" name="tel"  size ="20" 
         maxlength="10"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> E-mail: </td>
         <td><input type="text" value="<?=isset($_REQUEST['$adresseElectronique'])?$_REQUEST['$adresseElectronique']:' '?>"  name=
         "adresseElectronique" size ="75" maxlength="70"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> Type*: </td>
         <td>
            
         <?php if ($_REQUEST['type']): ?> 
            
               <input type='radio' name='type' value='1' checked>  
               Etablissement Scolaire
               <input type='radio' name='type' value='0'>  Autre

         <?php else : ?>
             
           
                
                <input type='radio' name='type' value='1'> 
                Etablissement Scolaire
                <input type='radio' name='type' value='0' checked> Autre
              
         <?php endif ?> 

           </td>
         </tr>
         <tr class='ligneTabNonQuad'>
            <td colspan='2' ><strong>Responsable:</strong></td>
         </tr>
         <tr class='ligneTabNonQuad'>
            <td> Civilité*: </td>
            <td> <select name='civiliteResponsable'>
              <?php foreach($tabCivilite as $civilite) : ?>
                  
                    <option <?$civilite==$tabCivilite ? 'selected ': ''?> <?= $civilite ?></option>
                   
                  
                    <?php endforeach ?> 
          
               </select>&nbsp; &nbsp; &nbsp; &nbsp; Nom*: 
               <input type="text" value="<?=isset($_REQUEST['$nomResponsable'])?$_REQUEST['$nomResponsable']:' '?>" name=
               "nomResponsable" size="26" maxlength="25">
               &nbsp; &nbsp; &nbsp; &nbsp; Prénom: 
               <input type="text"   value="<?=isset($_REQUEST['$prenomResponsable'])?$_REQUEST['$prenomResponsable']:' '?>" name=
               "prenomResponsable" size="26" maxlength="25">
            </td>
         </tr>
          <tr class="ligneTabNonQuad">
            <td> Nombre chambres offertes*: </td>
            <td><input type="text" value="<?=isset($_REQUEST['$nombreChambresOffertes'])?$_REQUEST['$nombreChambresOffertes']:' '?>"name=
            "nombreChambresOffertes" size ="2" maxlength="3"></td>
         </tr>
   </table>
   
  
   <table align='center' cellspacing='15' cellpadding='0'>
      <tr>
         <td align='right'><input type='submit' value='Valider' name='valider'>
         </td>
         <td align='left'><input type='reset' value='Annuler' name='annuler'>
         </td>
      </tr>
      <tr>
         <td colspan='2' align='center'><a href= ctrllisteEtablissements.php?action=listeEtablissements'>Retour</a>
         </td>
      </tr>
   </table>
</form>

<?php if ($action=='validerCreEtab')
{
   if (nbErreurs()!=0)
   {
      afficherErreurs();
   }
   else
   {
      echo "
      <h5><center>La création de l'établissement a été effectuée</center></h5>";
   }
}

?>
