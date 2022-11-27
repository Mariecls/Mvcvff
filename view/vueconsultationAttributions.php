<!DOCTYPE html>
<html lang="fr">
<?php if ($nbEtab!=0):?>

   <table width='75%' cellspacing='0' cellpadding='0' align='center'<tr><td>
   <a href='ctrlmodificationAttributions.php?action=demanderModifAttrib'>Effectuer ou modifier les attributions</a></td></tr></table><br><br>

   <?php $req=obtenirReqEtablissementsAyantChambresAttribuées();
   $rsEtab=$connexion-> query($req);
   $lgEtab=$rsEtab->fetchAll();?>

   <?php foreach ($lgEtab as $row):?>
      <?php $idEtab=$row['id'];
      $nomEtab=$row['nom'];?>

      <table width='75%' cellspacing='0' cellpadding='0' align='center' class='tabQuadrille'>
      
      <?php $nbOffre=$row["nombreChambresOffertes"];
      $nbOccup=obtenirNbOccup($connexion, $idEtab);
      $nbChLib = $nbOffre - $nbOccup;?>

      <tr class='enTeteTabQuad'>
         <td colspan='3' align='left'><strong><?=$nomEtab?></strong>&nbsp;(Offre : <?=$nbOffre?>&nbsp;&nbsp;Disponibilités : <?=$nbChLib?>)</td>
      </tr>
      
      <tr class='ligneTabQuad'>
         <td width='40%' align='left'><i><strong>Nom groupe</strong></i></td>
         <td width = '40%' align ='left'><i><strong>Pays groupe</strong></i></td>
         <td width='20%' align='left'><i><strong>Chambres attribuées</strong></i>
         </td>
      </tr>
        
          
      <?php $req=obtenirReqGroupesEtab($idEtab);
      $rsGroupe=$connexion->query($req);
      $lgGroupe=$rsGroupe->fetchAll();?>
      <?php foreach($lgGroupe as $row): ?>
      
         <?php $idGroupe=$row['id'];
         $nomGroupe=$row['nom'];
         $nomPays=$row['nomPays'];?>
         
         <tr class='ligneTabQuad'>
            <td width='40%' align='left'><?=$nomGroupe?> </td>
            <td width = '20%' align ='left'><?=$nomPays?></td>
         <?php $nbOccupGroupe=obtenirNbOccupGroupe($connexion, $idEtab, $idGroupe);?>
        
            <td width='20%' align='left'><?=$nbOccupGroupe?></td>
         </tr>
      <?php endforeach ?>
   
      </table><br>
   <?php endforeach ?>
<?php endif ?>
</html>