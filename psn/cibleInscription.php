<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="refresh" content="2; URL=Accueil.php">
		<title> Cycl'up </title>
		<link href="bootstrap.css" rel="stylesheet">
		<script src="bootstrap.js"></script>
		<script src="jquery-2.1.4.js"></script>
		<script src="bootstrap.js"></script>
	</head>
	<body>
		<?php
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=psn;charset=utf8', 'root', '');
		}
		catch(Exception $e)
		{
				die('Erreur : '.$e->getMessage());
		}

		// On ajoute une entrée dans la table utilisateurs
		$req = $bdd->prepare('INSERT INTO users(Nom, Prenom, Pseudo, MotDePasse, Mail, Age, Pays, Departement, Adresse, TypeDeVendeur) VALUES(:nom , :prenom ,:pseudo, :motdepasse, :mail , :age , :pays , :departement , :adresse, :type)');
		$req->execute(array(
		'nom'=>strip_tags($_POST['Nom']),
		'prenom'=>strip_tags($_POST['Prenom']),
		'pseudo'=>strip_tags($_POST['Pseudo']),
		'motdepasse'=>strip_tags(sha1($_POST['MotDePasse'])),
		'mail'=>strip_tags($_POST['Mail']),
		'age'=>strip_tags($_POST['Age']),
		'pays'=>strip_tags($_POST['Pays']),
		'departement'=>strip_tags($_POST['Departement']),
		'adresse'=>strip_tags($_POST['Adresse']),
		'type'=>strip_tags($_POST['Type'])
		));	

		echo "Votre demande d'inscription a bien été prise en compte, vous allez être redirigé.";
		?>
	</body>
</html>