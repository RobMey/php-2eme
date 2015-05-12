<?php
	// Exercice 5 chapitre 2
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
        font-family: Arial;
        font-size: 16pt;
        text-align: center;
        background-color: red;
      }
    </style>
  </head>
  <body>
    <?php

      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $age = $_POST['age'];
      $motdepasse = $_POST['motdepasse'];
      $majeur = $_POST['majeur'];
      $sexe = $_POST['sexe'];
      $lettre = $_POST['lettre'];
      $membre = $_POST['membre'];

      echo "Nom :" . $nom . "</br>";
      echo "Prenom :" . $prenom . "</br>";
      echo "Age :" . $age . "</br>";
      echo "Mot de passe :" . $motdepasse . "</br>";
      if ($majeur == 1) {
        echo "Vous etes majeur" . "</br>";
      } else {
        echo "Vous etes mineur" . "</br>";
      }
      echo "Sexe :" . $sexe . "</br>";
      if ($lettre == 1) {
        echo "Vous avez choisi de recevoir notre lettre de nouvelles" . "</br>";
      } else {
        echo "Vous ne voulez pas de lettre de nouvelles" . "</br>";
      }
      if ($membre == 1) {
        echo "Vous etes parmis les membres de soutien" . "</br>";
      } else {
        echo "Vous ne faites pas partis des membres de soutien" . "</br>";
      }

    ?>
  </body>
</html>