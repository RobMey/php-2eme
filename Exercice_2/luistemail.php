<?php
	//Exercice 2
  // Robin MEylan
  // 12.06.2015 - CPNV Média
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
  	<?php

      $dbh = new mysqli('localhost', 'cpnv', 'cpnv1234', 'ch04');

      if ($dbh->connect_erno) {
        die("Problème de connexion({$dbh->connect_erno}))" . $dbh->connect_erno);
      }

      $request = "SELECT id, email, date_inscription FROM liste_email;";
      $result = $dbh->query($request);
      echo "<table><tr><th>id</th><th>Email</th>Date</th></tr>"
      foreach ($result as $email) {
        echo "<tr><th>id</th><th>Email</th>Date</th></tr>"
      }
  </body>
</html>