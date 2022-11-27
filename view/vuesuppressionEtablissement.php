<table width='80%' cellpadding='0' cellspacing='0' align='center'>
   <tr>
   <td align='center'><a href='../index.php'>Accueil ></a> <a href='ctrllisteEtablissements.php'> listeEtablissements ></a> suppressionEtablissement</td>
   </tr>
</table>
<br>

<?php foreach($lgEtab as $row)
{
   $nom=$row['nom'];
}
?>
<!--// Cas 1ère étape (on vient de listeEtablissements.php)-->

<?php if ($_REQUEST=='demanderSupprEtab'): ?>    

   
   <br><center><h5>Souhaitez-vous vraiment supprimer l'établissement<?=$nom?> ? 
   <br><br>
   <a href='ctrlsuppressionEtablissement.php?action=validerSupprEtab&amp;idEtab=$id'>
   Oui</a>&nbsp; &nbsp; &nbsp; &nbsp;
   <a href='crtllisteEtablissement.php?'>Non</a></h5></center>
   
<!--// Cas 2ème étape (on vient de suppressionEtablissement.php)-->

<?php else : ?>

   <?php supprimerEtablissement($connexion, $id);?>
   <br><br><center><h5>L'établissement <?=$nom?> a été supprimé</h5>
   <a href='ctrllisteEtablissements.php?'>Retour</a></center>
<?php endif ?>

