<?php
	// premier test php
?>
<html>
  <head>
    <title>Coucouuuuu</title>
    <style></style>
  </head>
  <body>
  	<?php
  		$nom = "Chapline";
  		$ville = "Vevey";
      $pays = "Suisse";
      $operation = "";

  		echo "bonjour " . $nom . " !<br>";
      echo "Vous habitez à ". $ville . " en " . $pays . " !<br>";
      printf('Vous habitez à %s en %s !<br>', $ville, $pays);

      $operation = strlen($nom);
      echo "strlen avec la variable $nom donne " . $operation . " !<br>";

      $operation = mb_strlen($nom);
      echo "strlen avec la variable $nom donne " . $operation . " !<br>";

      $operation = strtoupper($nom);
      echo "stroupper avec la variable $nom donne " . $operation . " !<br>";

      $operation = mb_strtoupper($nom);
      echo "stroupper avec la variable $nom donne " . $operation . " !<br>";
  	?>
  </body>
</html>