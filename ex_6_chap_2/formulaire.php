<?php
	//Exercice 5 chapitre 2
  // Robin MEylan
  // 31.03.2015 - CPNV Média
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Coucouuuuu</title>
    <style>
      * {
        font-family: DIN;
        font-size: 13pt;
      }
    </style>
  </head>
  <body>
  	<form name="formulaire" method="post" action="traitement_formulaire.php">
      <p>Nom:</p>
      <input name="nom" type="text" size="30">
      </br>
      <p>Prenom:</p>
      <input name="prenom" type="text" size="30">
      </br>
      <p>Quel est ton âge :</p>
      <input name="prenom" type="number" size="30">
      </br>
      <p>Mot de passe :</p>
      <input name="motdepasse" type="password" size="30">
      </br>
      <p>Est tu majeur</p>
      </br>
      <select name="majeur">
        <option value="1">Oui</option>
        <option value="0">Non</option>
      </select>
      </br>
      <p>Type</p>
      </br>
      <input type="radio" name="sexe" value="Femme"/><label>Femme</label>
      <input type="radio" name="sexe" value="Homme"/><label>Homme</label>
      <br />
      <p>Options</p>
      </br>
      <input type="checkbox" name="lettre"/><label>Lettre de nouvelles</label>
      <input type="checkbox" name="membre"/><label>Membre de soutien</label>
      </br>
      </br>
      <input type="submit" value="Envoyer"/>
    </form>
  </body>
</html>