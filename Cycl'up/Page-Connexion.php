<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
	<meta http-equiv="refresh" content="0.5; URL=Page-Accueil.php">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cycl'Up</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
	<!-- My CSS -->
    <link href="pageaccueil.css" rel="stylesheet">

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
		<?php
			try
			{
				$bdd = new PDO('mysql:host=db621719460.db.1and1.com;dbname=db621719460;charset=utf8', 'dbo621719460', 'Ue4Fg6t');
			}
			catch(Exception $e)
			{
					die('Erreur : '.$e->getMessage());
			}
			// Hachage du mot de passe
			$pass_hache = sha1($_POST['MotDePasse']);
			$pseudo = $_POST['Pseudo'];

			// Vérification des identifiants
			$req = $bdd->prepare('SELECT Id FROM users WHERE Pseudo = :pseudo AND MotDePasse = :pass');
			$req->execute(array(
				'pseudo' => $pseudo,
				'pass' => $pass_hache));

			$resultat = $req->fetch();

			if (!$resultat)
			{
				echo 'Mauvais identifiant ou mot de passe !';
				header('Location: Page-Inscription.php');      
			}
			else
			{
				session_start();
				$_SESSION['id'] = $resultat['Id'];
				$_SESSION['pseudo'] = $pseudo;
				$_SESSION['connecte']= True;
				$_SESSION['derniereaction'] = time();
				echo 'Vous êtes connecté !';
			}
		
		?>
	</body>
</html>
