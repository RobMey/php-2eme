<?php
	/*----------------------------------------------------------
  *
  *
  *
  *
  *
  *
  *-----------------------------------------------------------
  */
  //initialisation des variables
  $nom = "Gaston Lagaffe <br>";
  $var1 = 10;
  $var2 = 3.3;
  $operation = 0;
?>
<!doctype html>
<html>
  <head>
    <title>Coucouuuuu</title>
    <style></style>
  </head>
  <body>
  	<?php

  		echo "Bonjour " . $nom . "<br>";

  		$operation = ($var1+$var2);
  		echo '$var1' . " + " . '$var2' . " = " . $operation . "<br>";

  		$operation = ($var1 % $var2);
  		echo '$var1' . " % " . '$var2' . " = " . $operation . "<br>";

  		$operation = round($var1 / $var2);
  		echo "Division entière de var1 par var2 = " . $operation . "<br>";

  		$var1 += 20);
  		echo "Incrémentation de 20 pour var1: " . $var1 . "<br>";

  		$var1++;
  		echo "Incrémentation de 1 pour var1: " . $var1 . "<br>";

      $var1 = (int) $var1;
      echo "$var1"
  	?>
  </body>
</html>