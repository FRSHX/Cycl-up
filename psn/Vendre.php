<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="psn.css" />
		<title> Acheter </title>
		<link href="bootstrap.css" rel="stylesheet">
		<script src="jquery-2.1.4.js"></script>
		<script src="bootstrap.js"></script>
		
	</head>
	
	<body>
		<?php include("Menu.php"); ?>
		<div id="block_page" class="container">
			<div>
				<div class= "formulaire">
					<form method="post" action="cible.php" enctype="multipart/form-data">
	 
						<p>
							<input type="hidden" name="pseudo" value="Mateo21" />
							<input type="hidden" name="MAX_FILE_SIZE" value="500000">
							Titre de l'annonce : 
							<br/>
							<input type="text" name="Nom" placeholder="Nom de l'objet"/> 
							<br/>
							Description de l'annonce : 
							<br/> 
							<textarea placeholder="Décrivez votre objet" name="Description"  rows="5" cols="45" ></textarea>
							<br/>
							Prix de l'objet (€) :
							<br/>
							<input type="text" name="Prix"/> 
							<br/>
							Photo de l'objet avant upcycling.
							<input type="file" name="Photo">
							<br/>
							
							<input type="submit" value="Valider" /> 
							
						</p>
				 
					</form>
				</div>
			</div>
			<?php include("Footer.php"); ?>
		</div>
	</body>
</html>