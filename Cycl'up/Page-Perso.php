<?php
session_start();
?>

<!DOCTYPE html>

<html lang="fr">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title> Présenter un objet </title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
		<link href="css/connexion.css" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="css/business-casual.css" rel="stylesheet">

		<!-- Fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>

		<?php include("Page-Menu.php"); ?>

		<div class="container">
			<div class="row">
			<?php
			try
			{
				$bdd = new PDO('mysql:host=db621719460.db.1and1.com;dbname=db621719460;charset=utf8', 'dbo621719460', 'Ue4Fg6t');
			}
			catch(Exception $e)
			{
					die('Erreur : '.$e->getMessage());
			}
			
			$reponse = $bdd->query('SELECT * FROM produits RIGHT OUTER JOIN users on users.Pseudo = produits.NomDuVendeur WHERE Pseudo="'.$_SESSION['pseudo'].'" ');
			
			if ($donnees = $reponse->fetch()){
					// On affiche chaque entrée une à une
					$colonne="1";
					?>
						<section class="row ">
							<div class="col-md-1">
							</div>
							<div class="box col-md-4 annonce">
								<a href="Page-Objet.php?Id=<?php echo $donnees['Id']?>">
								<h3> <?php echo $donnees['Nom']; ?>:</h3><br />
								</a>
								<strong>Description :</strong> <?php echo $donnees['Description']; ?> <br/>
								<strong>Prix :        </strong><?php echo $donnees['Prix']; ?> € <br/> 
								<?php echo "<img src=\"{$donnees["Photo"]}\" width=\"200\" height=\"100\"  class=\" img-responsive img-border img-full\">"; ?> 
							</div>
						
					<?php
					// On affiche chaque entrée une à une
					while ($donnees = $reponse->fetch())
						
					{
						if ($colonne == "0" AND ($donnees = $reponse->fetch())){
					?>
						<section class="row ">
							<div class="col-md-1">
							</div>
							<div class="box col-md-4 annonce">
								<a href="Page-Objet.php?Id=<?php echo $donnees['Id']?>">
								<h3> <?php echo $donnees['Nom']; ?>:</h3><br />
								</a>
								<strong>Description :</strong> <?php echo $donnees['Description']; ?> <br/>
								<strong>Prix :        </strong><?php echo $donnees['Prix']; ?> € <br/> 
								<?php echo "<img src=\"{$donnees["Photo"]}\" width=\"200\" height=\"100\"  class=\" img-responsive img-border img-full\">"; ?> 
							</div>
						
					<?php
					}
						elseif ($colonne == "1"AND ($donnees = $reponse->fetch())){
					?>
							<div class="col-md-2">
							</div>
								<div class="box col-md-4 annonce">
									<a href="Page-Objet.php?Id=<?php echo $donnees['Id']?>">
									<h3> <?php echo $donnees['Nom']; ?>:</h3><br />
									</a>
									<strong>Description :</strong> <?php echo $donnees['Description']; ?> <br/>
									<strong>Prix :       </strong><?php echo $donnees['Prix']; ?> € <br/> 
									</strong><?php echo "<img src=\"{$donnees["Photo"]}\" width=\"200\" height=\"100\"  class=\" img-responsive img-border img-full\">"; ?> 
								</div>
							</section>
						
					<?php
					}
					$colonne=!$colonne; //on inverse la colonne à chaque tour
					}
				}
				else {
					 echo "Aucun article en vente"; 
				}
				

				$reponse->closeCursor(); // Termine le traitement de la requête

				?>
			</div>
		<!-- Fin du container-->
		</div>
	</body>
</html>