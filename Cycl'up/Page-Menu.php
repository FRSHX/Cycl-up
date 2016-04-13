<link href="css/connexion.css" rel="stylesheet">
<div class="address-bar"></div>
<div id="en_tete" >
	<header>
	<!-- Fermeture automatique de session au bout de 1200 secondes -->
	<?php
	$dureelimite="1200";
	if (ISSET($_SESSION['connecte'])){
		if (time()- $_SESSION['derniereaction'] > $dureelimite) {
		header('Location: Page-Deconnexion.php'); 
		}
	else {
	  $_SESSION['derniereaction'] = time(); // on relance
	  // reste du code
	}
	}
	?>
	</header>
	<!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container" style="margin-left:5px";>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Cycl'Up</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
			<div class="row">
				<div class="collapse navbar-collapse col-md-6" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li style="margin-top:15px;">
							<img src="img/images/logo_v4_nom.png" alt="Cycl'up" width="100" height="50">
						</li>
						<li>
							<a href="Page-Accueil.php">Accueil</a>
						</li>
						<li>
							<a href="Page-Forum.php">Forum</a>
						</li>
						
						<?php 
						if (ISSET($_SESSION['connecte'])){
							if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']) AND isset($_SESSION['connecte']))
								{
									//afficher quelque chose
								}
						?>	
						<li>
							<a href="Page-Perso.php">Espace Perso</a>
						</li>
						<li>
						<a href="Page-Deconnexion.php">
						Déconnexion
						</a>
						</li>
						<div class="col-md-2 nav navbar-nav navbar-right" style="margin-top:30px;margin-bottom:20px;">
							<form method="post" action="Page-Cible-Recherche.php" enctype="multipart/form-data" role="form" class="search-form">
								<div class="form-group has-feedback">
									<label for="search" class="sr-only">Search</label>
									<input type="text" class="form-control" name="Recherche" value="" placeholder="Un objet, un meuble...">
									<span class="glyphicon glyphicon-search form-control-feedback"></span>
								</div>
							</form>
						</div>
						<?php
						}
						elseif (!ISSET($_SESSION['connecte'])){
						?>
						<li>
							<a href="Page-Inscription.php">S'inscrire</a>
						</li>
						<li>
							<a href="Page-Team.php">La Team</a>
						</li>
						<li>
						<a href="#" data-toggle="modal" data-target="#login-modal" class="link" >Connexion</a>
						</li>
						<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
								  <div class="modal-dialog">
										<div class="loginmodal-container">
											<h1>Login to Your Account</h1><br>
										  <form method="post" action="Page-Connexion.php" role="form">
											<input type="text" name="Pseudo" placeholder="Nom d'utilisateur">
											<input type="password" name="MotDePasse" placeholder="Mot de Passe">
											<input type="submit" name="login" class="login loginmodal-submit" value="Login">
										  </form>
											
										  <div class="login-help">
											<a href="#">Register</a> - <a href="#">Forgot Password</a>
										  </div>
										</div>
									</div>
								  </div>
						<div class="col-md-2 nav navbar-nav navbar-right" style="margin-top:30px;margin-bottom:20px;">
							<form method="post" action="Page-Cible-Recherche.php" enctype="multipart/form-data" role="form" class="search-form">
								<div class="form-group has-feedback">
									<label for="search" class="sr-only">Search</label>
									<input type="text" class="form-control" name="Recherche" value="" placeholder="Un objet, un meuble...">
									<span class="glyphicon glyphicon-search form-control-feedback"></span>
								</div>
							</form>
						</div>
						<?php
						}
						?>	
					</ul>
				</div>
					
            <!-- /.navbar-collapse -->
			</div>
		</div>
        <!-- /.container -->
    </nav></br></br></br>
	
</div>