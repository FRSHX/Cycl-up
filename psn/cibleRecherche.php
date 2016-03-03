<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Cycl'up </title>
		<link href="bootstrap.css" rel="stylesheet">
		<script src="bootstrap.js"></script>
		<script src="jquery-2.1.4.js"></script>
		<script src="bootstrap.js"></script>	
	</head>
	<body>
		<?php include("Menu.php"); ?>
		<?php
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=psn;charset=utf8', 'root', '');
		}
		catch(Exception $e)
		{
				die('Erreur : '.$e->getMessage());
		}

		$reponse = $bdd->query('SELECT * FROM produits WHERE Nom LIKE "%'.$_POST['Recherche'].'%" OR Description LIKE "%'.$_POST['Recherche'].'%" OR Prix LIKE "%'.$_POST['Recherche'].'%" ');

		
		if ($donnees = $reponse->fetch()){
			// On affiche chaque entrée une à une
			while ($donnees = $reponse->fetch())
			{
			?>
				<section class="row annonce well table table-bordered">
					<div class="col-md-2">
					</div>
					<div class="col-md-8">
						<strong>Objet :</strong> <?php echo $donnees['Nom']; ?><br />
						<strong>Description :</strong> <?php echo $donnees['Description']; ?> <br/>
						<strong>Prix :        </strong><?php echo $donnees['Prix']; ?> € <br/> 
						<strong>image :       </strong><?php echo "<img src=\"{$donnees["Photo"]}\" width=\"200\" height=\"100\"  class=\"img-thumbnail\">"; ?> 
					</div>	
					<div class="col-md-2">
					</div>
				</section>
				
			<?php
			}
		}
		else {
			 echo "Nous n'avons pas pu trouver d'annonce correspondant aux critères de votre recherche :,("; 
		}
		

		$reponse->closeCursor(); // Termine le traitement de la requête

		?>
		
	</body>
</html>