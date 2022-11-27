<table width='80%' cellpadding='0' cellspacing='0' align='center'>
   <tr>
   <td align='center'><a href='../index.php'>Accueil ></a> <a href='ctrllisteEtablissements.php'> listeEtablissements ></a> detailEtablissement</td>
   </tr>
</table>
<br>

<?php foreach($req as $row): ?>

   <table width='60%' cellspacing='0' cellpadding='0' align='center' 
   class='tabNonQuadrille'>
      
      <tr class='enTeteTabNonQuad'>
         <td colspan='3'><?=$row['nom'] ?></td>
      </tr>
      <tr class='ligneTabNonQuad'>
         <td  width='20%'> id: </td>
         <td><?= $row['id'] ?></td>
      </tr>
      <tr class='ligneTabNonQuad'>
         <td> Adresse: </td>
         <td><?=$row['adresseRue'] ?></td>
      </tr>
      <tr class='ligneTabNonQuad'>
         <td> Code postal: </td>
         <td><?=$row['codePostal'] ?></td>
      </tr>
      <tr class='ligneTabNonQuad'>
         <td> Ville: </td>
         <td><?=$row['ville'] ?></td>
      </tr>
      <tr class='ligneTabNonQuad'>
         <td> Téléphone: </td>
         <td><?=$row['tel'] ?></td>
      </tr>
      <tr class='ligneTabNonQuad'>
         <td> E-mail: </td>
         <td><?=$row['adresseElectronique'] ?></td>
      </tr>
      <tr class='ligneTabNonQuad'>
         <td> Type: </td>
        

         <?php if ($row['type']) : ?>
<td> Etablissement scolaire </td>
<?php else : ?>
<td> Autre établissement </td>
<?php endif ?>

  
        </tr>
      <tr class='ligneTabNonQuad'>
      <td> Responsable: </td>
         <td><?=$row['nomResponsable'] ?> <?=$row['prenomResponsable'] ?>  <?=$row['civiliteResponsable'] ?> </td>
         
      </tr> 
      <tr class='ligneTabNonQuad'>
         <td> Offre: </td>
         <td> <?=$row['nombreChambresOffertes'] ?>&nbsp;chambre(s)</td>
      </tr>

      <?php endforeach  ?> 
   </table>
   <table align='center'>
      <tr>
         <td align='center'><a href='ctrllisteEtablissements.php'>Retour</a>
         </td>
      </tr>
   </table>