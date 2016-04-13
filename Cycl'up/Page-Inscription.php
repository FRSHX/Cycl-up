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

    <title> Inscription sur Cycl'up</title>

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
                    <h2 class="intro-text text-center">Je m'inscris sur Cycl'Up
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
                                        
                    <hr>
                </div>
                
                <div class="col-lg-2">
                </div>
                
                <div class="col-lg-8 text-center">
                
                <h2>Formulaire</br></br></br></h2>
            
                <form method="post" action="Page-Cible-Inscription.php" enctype="multipart/form-data" role="form" class="form-inline">
				
					<section class="row">
						<p>
							<div class="col-md-1">
							</div>
							<div class="form-group col-md-4">  <!--informations générales-->
							
								<label>Nom (du vendeur ou de la boutique de vente) *:</label>
								<br/>
								<input type="text" class="form-control" required name="Nom" /> 
								<br/>
								<label>Prénom :</label>
								<br/>
								<input type="text" class="form-control" name="Prenom"/> 
								<br/>
								<label>Pseudonyme *:</label>
								<br/>
								<input type="text" class="form-control" required name="Pseudo"/> 
								<br/>
								<label>Mot de Passe *:</label>
								<br/>
								<input type="password" class="form-control" required name="MotDePasse"/> 
								<br/>
								<label>Veuillez retaper votre mot de passe *:</label>
								<br/>
								<input type="password" class= "form-control" required name="MotDePasse2"/> 
								<br/>
								<label> Mail *:</label>
								<br/>
								<input type="text" class="form-control" required name="Mail"/> 
								<br/>
								<label> Age :</label>
								<br/>
								<input type="number" class="form-control" name="Age"/> 
								<br/>
							</div>
		
							<div class="form-group col-md-4 col-md-offset-2"> <!--informations complémentaires-->
								<label>Pays *:</label>
								<br/>
								<select name="Pays" class="form-control" required>
									<option value="Angleterre">Angleterre</option>
									<option value="Espagne">Espagne</option>
									<option value="France" selected="selected">France</option>
									<option value="Italie">Italie</option>
								</select>
								<br/>
								<label>Adresse</label>
								<br/>
								<input type="text" class="form-control" name="Adresse"/> 
								<br/>
								
								<label> Vous êtes :<br/></label>
								<select name="Type" required class="form-control"> 
									<option value="Particulier">Un particulier</option>
								    <option value="Professionnel"> Un professionnel indépendant</option>
									<option value="Ressourcerie">Une ressoucerie</option>
									<option for="Autre">Autre</option>
								</select>
								<br />
								
								<label>Lieux de Vente *:<br/></label>
								<select name="Departement" id="Departement" class="form-control" required>
									<option value=""> Sélectionner </option>
									<option value="01">01 Ain</option>
									<option value="02">02 Aisne</option>
									<option value="03">03 Allier</option>
									<option value="04">04 Alpes de Haute Provence</option>
									<option value="05">05 Hautes Alpes</option>
									<option value="06">06 Alpes Maritimes</option>
									<option value="07">07 Ardèche</option>
									<option value="08">08 Ardennes</option>
									<option value="09">09 Ariège</option>
									<option value="10">10 Aube</option>
									<option value="11">11 Aude</option>
									<option value="12">12 Aveyron</option>
									<option value="13">13 Bouches du Rhône</option>
									<option value="14">14 Calvados</option>
									<option value="15">15 Cantal</option>
									<option value="16">16 Charente</option>
									<option value="17">17 Charente Maritime</option>
									<option value="18">18 Cher</option>
									<option value="19">19 Corrèze</option>
									<option value="2A">2A Corse du Sud</option>
									<option value="2B">2B Haute-Corse</option>
									<option value="21">21 Côte d'Or</option>
									<option value="22">22 Côtes d'Armor</option>
									<option value="23">23 Creuse</option>
									<option value="24">24 Dordogne</option>
									<option value="25">25 Doubs</option>
									<option value="26">26 Drôme</option>
									<option value="27">27 Eure</option>
									<option value="28">28 Eure et Loir</option>
									<option value="29">29 Finistère</option>
									<option value="30">30 Gard</option>
									<option value="31">31 Haute Garonne</option>
									<option value="32">32 Gers</option>
									<option value="33">33 Gironde</option>
									<option value="34">34 Hérault</option>
									<option value="35">35 Ille et Vilaine</option>
									<option value="36">36 Indre</option>
									<option value="37">37 Indre et Loire</option>
									<option value="38">38 Isère</option>
									<option value="39">39 Jura</option>
									<option value="40">40 Landes</option>
									<option value="41">41 Loir et Cher</option>
									<option value="42">42 Loire</option>
									<option value="43">43 Haute Loire</option>
									<option value="44">44 Loire Atlantique</option>
									<option value="45">45 Loiret</option>
									<option value="46">46 Lot</option>
									<option value="47">47 Lot et Garonne</option>
									<option value="48">48 Lozère</option>
									<option value="49">49 Maine et Loire</option>
									<option value="50">50 Manche</option>
									<option value="51">51 Marne</option>
									<option value="52">52 Haute Marne</option>
									<option value="53">53 Mayenne</option>
									<option value="54">54 Meurthe et Moselle</option>
									<option value="55">55 Meuse</option>
									<option value="56">56 Morbihan</option>
									<option value="57">57 Moselle</option>
									<option value="58">58 Nièvre</option>
									<option value="59">59 Nord</option>
									<option value="60">60 Oise</option>
									<option value="61">61 Orne</option>
									<option value="62">62 Pas de Calais</option>
									<option value="63">63 Puy de Dôme</option>
									<option value="64">64 Pyrénées Atlantiques</option>
									<option value="65">65 Hautes Pyrénées</option>
									<option value="66">66 Pyrénées Orientales</option>
									<option value="67">67 Bas Rhin</option>
									<option value="68">68 Haut Rhin</option>
									<option value="69">69 Rhône</option>
									<option value="70">70 Haute Saône</option>
									<option value="71">71 Saône et Loire</option>
									<option value="72">72 Sarthe</option>
									<option value="73">73 Savoie</option>
									<option value="74">74 Haute Savoie</option>
									<option value="75">75 Paris</option>
									<option value="76">76 Seine Maritime</option>
									<option value="77">77 Seine et Marne</option>
									<option value="78">78 Yvelines</option>
									<option value="79">79 Deux Sèvres</option>
									<option value="80">80 Somme</option>
									<option value="81">81 Tarn</option>
									<option value="82">82 Tarn et Garonne</option>
									<option value="83">83 Var</option>
									<option value="84">84 Vaucluse</option>
									<option value="85">85 Vendée</option>
									<option value="86">86 Vienne</option>
									<option value="87">87 Haute Vienne</option>
									<option value="88">88 Vosges</option>
									<option value="89">89 Yonne</option>
									<option value="90">90 Territoire de Belfort</option>
									<option value="91">91 Essonne</option>
									<option value="92">92 Hauts de Seine</option>
									<option value="93">93 Seine Saint Denis</option>
									<option value="94">94 Val de Marne</option>
									<option value="95">95 Val d'Oise</option>
									<option value="971">971 Guadeloupe</option>
									<option value="972">972 Martinique</option>
									<option value="973">973 Guyane</option>
									<option value="974">974 Réunion</option>
									<option value="975">975 Saint Pierre et Miquelon</option>
									<option value="976">976 Mayotte</option>
								</select>
								<br/>
							</div>
							<div class="col-md-1">
							</div>
							<br/>
						</p>
					</section>
					<!--Bouton Valider centré a la fin-->
					<section class="row">
						<div class="col-md-5">
						</div>
						<div class="col-md-2">
							<input type="submit" value="Valider" class="btn btn-primary" /> 
						</div>
						<div class="col-md-5">
						</div>
					</section>
					
				</form>
                                    </div>
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