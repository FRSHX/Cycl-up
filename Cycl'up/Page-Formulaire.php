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
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Vendre un objet
                        <strong></strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slice-1.png" alt="">
                    <h2>Je remplis ce formulaire!
                        <br>
                        <small></small>
                    </h2>
                    <p>Nous pensons que chaque objet "Upcyclé" ou "rénové" a sa petite histoire. Ce formulaire nous aidera à avoir des spécificités sur ton objet pour la mise en vente mais aussi à connaitre une nouvelle histoire. Ton objet est unique ou spécial? Il a déja vécu tout une vie? Sa tranformation est né de certaine convictions dont tu aimerais parler? Raconte nous son incroyable histoire! </p>
                    
                    <hr>
                </div>
                
                <div class="col-lg-2">
                </div>
				<?php 
				if (ISSET($_SESSION['connecte'])){
					?>
                <div class="col-lg-8 text-center">
				
                <h2>Formulaire</br></br></br></h2>
				<form method="post" action="Page-Cible-Vendre.php" enctype="multipart/form-data">
	 
						<p>
							<input type="hidden" name="pseudo" value="Mateo21" />
							<input type="hidden" name="MAX_FILE_SIZE" value="500000">
							<fieldset class="form-group">
							<label>Comment s'appelle cet objet ? </label> 
							<br/>
							<input type="text" class="form-control" name="Nom" placeholder="Nom de l'objet"/> 
							<br/>
							</fieldset>
							
							<fieldset class="form-group">
							<label>Raconte-nous son histoire ! </label> 
							<br/> 
							<textarea placeholder="Décrivez votre objet" class="form-control" name="Description"  rows="5" cols="45" ></textarea>
							<br/>
							</fieldset>
							<fieldset class="form-group">
							<label>Une idée du prix ? </label>
							<br/>
							<input type="text" class="form-control" name="Prix"/> 
							<br/>
							</fieldset>
							<fieldset class="form-group">
							<label>Une photo de l'objet ?</label>
							<input type="file" class="form-control" name="Photo">
							<br/>
							</fieldset>
							<input type="submit" class="btn btn-primary" value="Valider" /> 
							
						</p>
				 
					</form>
  
				
   
  				</fieldset>
  				
                </div>
				<?php
				}
				else{
				?>
				<a href="Page-Inscription.php">
				<h2>Connecte-toi avant de poster des annonces !
                        <br>
                        <small></small>
                    </h2>
				</a>
				<?php
				}
				?>
                <div class="col-lg-12 text-center">
                      
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>





    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 
<!-- Use downloaded version of Bootstrap -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>