<?php
	//Exercice 5 chapitre 2
  // Robin MEylan
  // 31.03.2015 - CPNV Média
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Un titre</title>
</head>

<style>
      * {
        font-family: DIN;
        font-size: 13pt;
      }
    </style>
<body>

<?php

	if ($_POST['envoyer']) {
		
		$mail = $_POST['email'];
		
        $mail_nettoye = filter_var($mail, FILTER_SANITIZE_MAIL);
        
        if (filter_var($mail_nettoye, FILTER_VALIDATE_MAIL)) {
                
            echo "adresse valide<br>";
        } else {
            echo "adresse non valide<br>";
        }
        echo "<hr>";
                
        
			//Insertion base de donnée
        	//Etape de connexion serveur

		
		$dbh = new mysqli( "localhost","cpnv1234","cpnv","ch04");
		
		if ( $dbh->connect_errno ) {
			echo "Erreur de connexion" .$dbh->connect->error;
		}
		



			//Etape préparation et envoi de la requete
		
		$sql = "INSERT INTO liste_email VALUES (NULL, '" . $mail_nettoye . "',NOW() )";
        if ( $result = $dbh->query( $sql ) ) {
            echo $result->nom_rows . " lignes ajouté.";
        } else {
            echo "*½|*#!]'~`?!L'erreur : ", $dbh->error, "est survenue<br>";
        }
		

    } else { 
?>





<form id="insert" name="insert" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

<p> Entrez votre adresse email : <input type="mail" id="mail" name="mail" required="required"></p>
<input type="submit" id="envoyer" name="envoyer" value="Envoyer">

</form>

	<?php
	    mixed mysqli::query ( string $query [, int $resultmode = MYSQLI_STORE_RESULT ] )

	?>

</body> 
</html>
