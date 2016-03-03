<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Acheter </title>
		<link href="bootstrap.css" rel="stylesheet">
		<script src="jquery-2.1.4.js"></script>
		<script src="bootstrap.js"></script>
		
	</head>
	
	<body>
		<?php $page='two'; include("Menu.php"); ?>
		<div id="block_page" class="container">
			<!-- liste des annonces déposées -->
			<form method="post" action="Acheter.php">
			Filtre : <br/>
				<input type="checkbox" name="Prix" id="Prix" /> <label for="Prix">Prix</label>
				<input type="checkbox" name="Date" id="Date" /> <label for="Date">Date</label>
				<input type="submit" name="Filtrer" class="btn btn-default">
			<?php
				try
				{
					// On se connecte à MySQL
					$bdd = new PDO('mysql:host=localhost;dbname=psn;charset=utf8', 'root', '');
				}
				catch(Exception $e)
				{
					// En cas d'erreur, on affiche un message et on arrête tout
						die('Erreur : '.$e->getMessage());
				}

				// Si tout va bien, on peut continuer

				// On récupère tout le contenu de la table produits
				if (isset($_POST['Prix'])){
					$reponse = $bdd->query('SELECT * FROM produits ORDER BY produits.Prix ASC');
				}
				elseif (isset($_POST['Date'])){
					$reponse = $bdd->query('SELECT * FROM produits ORDER BY produits.Date ASC');
				}
				else {
					$reponse = $bdd->query('SELECT * FROM produits');
				}
				
				
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

				$reponse->closeCursor(); // Termine le traitement de la requête

				?>
				
			<?php include("Footer.php"); ?>
		</div>
	</body>
</html>