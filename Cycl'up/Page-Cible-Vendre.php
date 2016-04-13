<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
	<meta http-equiv="refresh" content="0.5; URL=Page-Accueil.php">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Présenter un objet</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
	<!-- My CSS -->
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
	<body>
		<?php 
		$dossier = 'upload/';
		$fichier = basename($_FILES['Photo']['name']);
		$taille_maxi = 500000;
		$taille = filesize($_FILES['Photo']['tmp_name']);
		$extensions = array('.png', '.gif', '.jpg', '.jpeg');
		$extension = strrchr($_FILES['Photo']['name'], '.'); 
		//Début des vérifications de sécurité...
		if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
		{
			 $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
			 header('Location: Page-Formulaire.php'); 
		}
		
		if($taille>$taille_maxi)
		{
			 $erreur = 'Le fichier est trop gros...';
		}
		
		if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
		{
			 //On formate le nom du fichier ici...
			 $fichier = strtr($fichier, 
				  'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
				  'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
			 $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
			 if(move_uploaded_file($_FILES['Photo']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
			 {
				try
				{
					$bdd = new PDO('mysql:host=db621719460.db.1and1.com;dbname=db621719460;charset=utf8', 'dbo621719460', 'Ue4Fg6t');
				}
				catch(Exception $e)
				{
						die('Erreur : '.$e->getMessage());
				}

				// On ajoute une entrée dans la table jeux_video
				$req = $bdd->prepare('INSERT INTO produits(Nom, Description, Prix, Photo, NomDuVendeur) VALUES(:Nom , :Description , :Prix, :Photo, :Vendeur )');
				$req->execute(array('Nom'=>strip_tags($_POST['Nom']),'Description'=>strip_tags($_POST['Description']),'Prix'=>strip_tags($_POST['Prix']),'Photo'=>'upload/'.strip_tags($_FILES['Photo']['name']),'Vendeur'=>strip_tags($_SESSION['pseudo'])));
				
				echo 'Upload effectué avec succès !';
				echo 'Votre objet est maintenant en vente!';
				  
			 }
			 else //Sinon (la fonction renvoie FALSE).
			 {
				  echo 'Echec de l\'upload !';
			 }
		}
		else
		{
			 echo $erreur;
		}
		
		?>
	</body>
</html>