<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="psn.css" />
		<title> Cycl'up official website </title>
	</head>
	<body>
		<div id="block_page">
			<?php include("Menu.php"); ?>
			<?php
			try
			{	
			$bdd = new PDO("mysql:host=localhost;dbname=psn;charset=utf-8",'root','');
			}
			catch (Exception $e)
			{
				die('Erreur :'.$e->getMessage());
			}
			?>
			<div id="imageProduit">
			<?php 
			$reponse = $bdd->query('SELECT * FROM produits WHERE Nom = "Pnouf"');
			$donnees = $reponse->fetch();
			echo "<img src=donnees['Image'] alt='Photo de'+donnees['Nom']/>";
			$reponse->closeCursor();
			
			?>
			</div>
			
			
			<?php include("Footer.php");?>
		</div>
	</body>
</html>