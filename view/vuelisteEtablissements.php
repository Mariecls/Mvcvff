<link href="css/cssGeneral.css" rel="stylesheet" type="text/css">
<table width='80%' cellpadding='0' cellspacing='0' align='center'>
   <tr>
   <td align='center'><a href='../index.php'>Accueil ></a> listeEtablissements</td>
   </tr>
</table>

<table width='70%' cellspacing='0' cellpadding='0' align='center' 
class='tabNonQuadrille'>
   <tr class='enTeteTabNonQuad'>
      <td colspan='4'>Etablissements</td>
   </tr>
   <?php foreach($lgEtab  as $value): ?>
   <tr class='ligneTabNonQuad'>
         <td width='52%'><?= $value['nom'] ?></td>
         
         <td width='16%' align='center'> 
         <a href='ctrldetailEtablissement.php?idEtab=<?= $value['id'] ?>'>
         Voir détail</a></td>
         
         <td width='16%' align='center'> 
         <a href='ctrlmodificationEtablissement.php?action=demanderModifEtab&amp;idEtab=<?= $value['id'] ?>'>
         Modifier</a></td>
		 
		 <?php if(!existeAttributionsEtab($connexion, $value['id'])) : ?>
		 <td width='16%' align='center'> 
            <a href='ctrlsuppressionEtablissement.php?action=demanderSupprEtab&amp;idEtab=<?= $value['id'] ?>'>
            Supprimer</a></td>
		 <?php else : ?>
			
			<?php if(obtenirNbOccup($connexion, $value['id']) == ChambresMax($connexion, $value['id'])) : ?>
				<td width='16%'>Complet</td>
			<?php else : ?>
				<?php if(obtenirNbOccup($connexion, $value['id']) == ChambresMax($connexion, $value['id'])) : ?>
                    <td width='16%'>Complet</td>
                <?php else : ?>
                    <td width='16%'><?= obtenirNbOccup($connexion, $value['id']) ?> chambres occupés</td>
                <?php endif ?>
            <?php endif ?>
		 <?php endif ?>
	
    </tr>
	<?php endforeach  ?> 
  
	<tr class='ligneTabNonQuad'>
      <td colspan='4'><a href='ctrlcreationEtablissement.php?action=demanderCreEtab'>
      Création d'un établissement</a ></td>
  </tr>
</table>