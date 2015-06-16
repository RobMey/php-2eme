<?php
	// TP3 chapitre 2
  // Robin Meylan
  // 19.05.2015 - CPNV Média
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Yop</title>
    <style>
      * {
        font-family: DIN;
        font-size: 16pt;
      }
    </style>
  </head>
  <body>
    <?php

    $dbh = $_POST ['email'];

    echo "scenario 1 : nettoyage et validation de la chaine [$email] <br>\n"

    $email_nettoye = filter_var($email, FILTER_SANITIZE_EMAIL);

    echo " Adresse nettoyée"

    if (filter_var($email_nettoye,FILTER_VALIDATE_EMAIL)) {
        echo "C'est valide"
    } else {
        echo "C'est non valide"
    }
 

    $dbh = $dbh->query($requete);

  </body>
</html>