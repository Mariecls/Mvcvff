<!DOCTYPE html>
<table width='80%' cellpadding='0' cellspacing='0' align='center'>
   <tr>
   <td align='center'><a href='../index.php'>Accueil ></a> <a href='ctrlconsultationAttributions.php'> consultationAttributions ></a> modificationAttributions</td>
   </tr>
</table>
<br>


<table width='80%' cellspacing='0' cellpadding='0' align='center'class='tabQuadrille'>
   <tr class='enTeteTabQuad'>
      <td colspan=80%><strong>Attributions</strong></td>
   </tr>
   <tr class='ligneTabQuad'>
      <td>nom équipe</td>
      <td>pays d'origine</td>
      
   <?php $req=obtenirReqEtablissementsOffrantChambres();
   $rsEtab=$connexion->query($req);
   $lgEtab=$rsEtab->fetchAll();?>

   <?php foreach($lgEtab as $row):?>

      <?php $idEtab=$row["id"];
      $nom=$row["nom"];
      $nbOffre=$row["nombreChambresOffertes"];
      $nbOccup=obtenirNbOccup($connexion, $idEtab);
      $nbChLib = $nbOffre - $nbOccup;?>
      <?php if($nbChLib==0):?>
        
         <td valign='top' width='$pourcCol%'><i>Disponibilités : <strong>complet </strong></i> <br><?=$nom?></td>
       
      <?php else: ?>
         
         <td valign='top' width='$pourcCol%'><i>Disponibilités : <?=$nbChLib?> </i> <br><?=$nom?></td>
      <?php endif; ?>
   <?php endforeach; ?>

</tr>

  
   <?php $req=obtenirReqIdNomGroupesAHeberger();
   $rsGroupe=$connexion->query($req);
   $lgGroupe=$rsGroupe->fetchAll();?>

   <?php foreach($lgGroupe as $row):?>

      <?php $idGroupe=$row['id'];
      $nom=$row['nom'];
      $nomPays=$row['nomPays'];?> 
      
      <tr class='ligneTabQuad'>
         <td width='25%'><?=$nom?></td>
         <td width='10%'><?=$nomPays?></td>

      <?php $req=obtenirReqEtablissementsOffrantChambres();
      $rsEtab=$connexion->query($req);
      $lgEtab=$rsEtab->fetchAll();?>
           
      
      <?php foreach($lgEtab as $row):?>
         <?php $idEtab=$row["id"];
         $nbOffre=$row["nombreChambresOffertes"];
         $nbOccup=obtenirNbOccup($connexion, $idEtab);
         $nbChLib = $nbOffre - $nbOccup;
         $nbOccupGroupe=obtenirNbOccupGroupe($connexion, $idEtab, $idGroupe);?>
         <?php if ($nbOccupGroupe!=0): ?>

            <?php $nbMax = $nbChLib + $nbOccupGroupe?>

            <td class='reserve'>
            <a href='ctrldonnerNbChambres.php?idEtab=<?=$idEtab?>&amp;idGroupe=<?=$idGroupe?>&amp;nbChambres=<?=$nbMax?>'><?=$nbOccupGroupe?></a></td>

         <?php else: ?>    
            
            <?php if ($nbChLib != 0):?>
               <td class='reserveSiLien'>
               <a href='ctrldonnerNbChambres.php?idEtab=<?=$idEtab?>&amp;idGroupe=<?=$idGroupe?>&amp;nbChambres=<?=$nbChLib?>'>
               __</a></td>
            
            <?php else :?>
            
               <td class='reserveSiLien'>&nbsp;</td>
            <?php endif; ?>
        <?php endif; ?>
            
      <?php $lgEtab=$rsEtab->fetchAll();?>

      <?php $lgGroupe=$rsGroupe->fetchAll();?>
      <?php endforeach; ?>
    <?php endforeach; ?>

</table>



<table align='center' width='80%'>
   <tr>
      <td width='34%' align='left'><a href='ctrlconsultationAttributions.php'>Retour</a>
      </td>
      <td class='reserveSiLien'>&nbsp;</td>
      <td width='30%' align='left'>Réservation possible si lien</td>
      <td class='reserve'>&nbsp;</td>
      <td width='30%' align='left'>Chambres réservées</td>
   </tr>
</table>

</html>