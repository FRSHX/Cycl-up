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
		<?php $page = 'one'; include("Menu.php"); ?>
		<div id="block_page" class= "container">  							<!--page globale-->
			<div class="well">
				Cycl’up vous met en relation avec des upcycleurs ( upcyclers?), il n’est pas possible de payer directement en ligne et le site ne propose pas de service de livraison. 
				<br/>
				<br/>
				Cycl’up est un site dédié à l’upcycling. Les seuls produits présents sur ce site sont des objets dits upcyclés, c’est à dire transformés, parfois même détournés complètement de leur nature initiale, toujours dans l’objectif de les revaloriser.
				exemple d’un objet upcyclé : le plouf de la ressourceriez « La Collecterie », un pouf fait à partir d’un pneu !
				<br/>
				<br/>
				Le site :
				<br/>
				Si vous fabriquez de tels objets, ou en possédez, n’hésitez pas à les mettre en vente via Cycl’up !
				Pour cela, inscrivez-vous en remplissant le formulaire ci-dessous ! 
				Une fois le formulaire envoyé, votre annonce sera publiée dans la semaine : le temps pour nous de vérifier qu’il s’agisse bien d’objets upcyclés ! 
			</div>
			<div class="well">
				Les 10 dernières annonces : <br/>
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
				$reponse = $bdd->query('SELECT * FROM produits LIMIT 0,10');
				
				
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
			</div>
		</div>
		<?php include("Footer.php"); ?>
	</body>
</html>