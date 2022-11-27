<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   
</body>

<form method='POST' action='ctrlmodificationAttributions.php'>
	<input type='hidden' value='validerModifAttrib' name='action'>
   <input type='hidden' value='<?=$idEtab?>' name='idEtab'>
   <input type='hidden' value='<?=$idGroupe?>' name='idGroupe'>
   
   <?php $nomGroupe=obtenirNomGroupe($connexion, $idGroupe);?>
  
   <br><center><h5>Combien de chambres souhaitez-vous pour le groupe <?=$nomGroupe?> dans cet établissement ?
   
   <select name='nbChambres'>
   <?php for($i=0; $i<=$nbChambres; $i++):?>
      <option><?=$i?></option>
   <?php endfor;?>
   </select></h5>
   <input type='submit' value='Valider' name='valider'>
   <input type='reset' value='Annuler' name='Annuler'><br><br>
   <a href='ctrlmodificationAttributions.php?action=demanderModifAttrib'>Retour</a>
   </center>
</form>
</html>