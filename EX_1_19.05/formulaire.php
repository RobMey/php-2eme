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
    <h1>Test</h1>
    <code>
  <?php

  $email = $_POST ['email'];

  echo "scenario 1 : nettoyage et validation de la chaine [$email] <br>\n"

  $email_nettoye = filter_var($email, FILTER_SANITIZE_EMAIL);

  echo " Adresse nettoyée"

  if (filter_var($email_nettoye,FILTER_VALIDATE_EMAIL)) {
      echo "C'est valide"
  } else {
      echo "C'est non valide"
  }
  echo "<hr>\n";

  $mail = filter_input (INPUT_POST), 'mail', FILTER_SANITISE_EMAIL);

    <?php
  $i=0;
  while($i <= 10)
  {
    echo "9 * $i = ". (9*$i);
    $i++;
  }

  $requete = "SELECT email, date FROM tbl_email";
  $result = $dbh->query($requete);
  if ($result) {
      printf("Select a retourné %d lignes.\n", $result->num_rows);

      $result->close();
  }

  ?>

  </body>
</html>