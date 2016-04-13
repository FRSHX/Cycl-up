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

    <title> Objet </title>

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
	
	<?php
				try
				{
					// On se connecte à MySQL
					$bdd = new PDO('mysql:host=db621719460.db.1and1.com;dbname=db621719460;charset=utf8', 'dbo621719460', 'Ue4Fg6t');
				}
				catch(Exception $e)
				{
					// En cas d'erreur, on affiche un message et on arrête tout
						die('Erreur : '.$e->getMessage());
				}

				// Si tout va bien, on peut continuer

				// On récupère tout le contenu de la table produits
				if (isset($_GET['Id'])){
					$reponse = $bdd->query('SELECT * FROM produits WHERE Id="'.$_GET['Id'].'"');
					if ($donnees = $reponse->fetch()){
						?>
							<div class="box col-md-12">
								<h3> <?php echo $donnees['Nom']; ?>:</h3><br />
								<strong>Description :</strong> <?php echo $donnees['Description']; ?> <br/>
								<strong>Prix :       </strong><?php echo $donnees['Prix']; ?> € <br/> 
								<strong>Vendeur :    </strong><?php echo $donnees['NomDuVendeur']; ?> <br/> 
								<?php echo "<img src=\"{$donnees["Photo"]}\" width=\"200\" height=\"200\"  class=\"img-border \">"; ?> 
							</div>
						<?php
					}
				}
	?>
	</div>
</body>
</html>