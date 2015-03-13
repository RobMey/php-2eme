<?php
/* ---------------------------------------------------------------------
 *                        Exercice 2-002                            
 * Nom du fichier: ajout_utilisateur_post.php 
 * Auteur: PKR 
 * Date: Janvier 2008
 * Description: Ce script affiche un formulaire d'inscription                              
 * ---------------------------------------------------------------------
 */
// Variables
// 
// on récupère les informations du l'utilisateur
?>
<html>
	<body>
		<?php
			echo $_GET['nom']."<br>";
			echo $_GET['prenom']."<br>";
			echo $_GET['age']."<br>";
		?>
	</body>
</html>