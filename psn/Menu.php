<div id="en_tete" >
	<header>
		<img src="images/logo_v4_nom.png" alt="Cycl'up" width="100" height="50" id="logo_top">
		<form method="post" action="connexion.php" enctype="multipart/form-data" role="form" class="form-inline">
			<div class="form-group">
				Pseudonyme *:
				<input type="text" required name="Pseudo" class="input-sm form-control" placeholder="Pseudo"/> 
			</div>
			<div class="form-group">
				Mot de Passe *:
				<input type="password" required name="MotDePasse" class="input-sm form-control" placeholder="Mot de passe"/> 
			</div>
			<div class="checkbox">
				<input type="checkbox"> Rester connecté
			</div>
			<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span> Connexion</button>
		</form>
	</header>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<ul class="nav navbar-nav">
		  <li> <a href="Accueil.php">Accueil</a> </li>
		  <li> <a href="Acheter.php">Annonces</a> </li>
		  <li> <a href="Vendre.php">Vendre</a> </li>
		  <li> <a href="Forum.php">Forum</a> </li>
		  <li> <a href="Inscription.php">Inscription</a> </li>
		</ul>
		<form class="navbar-form navbar-right inline-form" method="post" action="cibleRecherche.php">
		  <div class="form-group">
			<input type="search" name="Recherche" class="input-sm form-control" placeholder="Recherche">
			<button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
		  </div>
		</form>
	  </div>
	</nav>
	
</div>