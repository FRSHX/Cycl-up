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
				  echo 'Upload effectué avec succès !';
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
		
		<?php
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=psn;charset=utf8', 'root', '');
		}
		catch(Exception $e)
		{
				die('Erreur : '.$e->getMessage());
		}

		// On ajoute une entrée dans la table jeux_video
		$req = $bdd->prepare('INSERT INTO produits(Nom, Description, Prix, Photo) VALUES(:Nom , :Description , :Prix, :Photo )');
		$req->execute(array('Nom'=>strip_tags($_POST['Nom']),'Description'=>strip_tags($_POST['Description']),'Prix'=>strip_tags($_POST['Prix']),'Photo'=>'upload/'.strip_tags($_FILES['Photo']['name'])));
		
		
		echo 'Le jeu a bien été ajouté !';
		
		?>
	</body>
</html>