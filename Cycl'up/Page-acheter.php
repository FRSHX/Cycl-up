<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trouver un objet</title>

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

    <?php include("Page-Menu.php"); ?>
	<div id="block_page" class="container">
<!-- Barre de navigation tout à gauche -->
<div class="col-md-12 box">
<form method="post" action="Page-Acheter.php">
			<h2>Filtrer :</h2> <br/>
				<input type="checkbox" name="Prix" id="Prix" /> <label for="Prix">Prix</label>
				<input type="checkbox" name="Date" id="Date" /> <label for="Date">Date</label> <br/>
				
				<label>Acheter à proximité de:</label><br/>
				<select name="Departement" id="Departement" class="col-md-2 form-control" >
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
				<input type="submit" name="Filtrer" class="btn btn-default">
			
 </div>
			<!-- liste des annonces déposées -->
			
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
				if (isset($_POST['Prix'])){
					$reponse = $bdd->query('SELECT * FROM produits ORDER BY produits.Prix ASC');
				}
				elseif (isset($_POST['Date'])){
					$reponse = $bdd->query('SELECT * FROM produits ORDER BY produits.Date ASC');
				}
				elseif (isset($_POST['Departement'])){
					$reponse = $bdd->query('SELECT * FROM produits JOIN users ON users.Nom=produits.NomDuVendeur WHERE Departement LIKE "%'.$_POST['Departement'].'%"');
				}
				else {
					$reponse = $bdd->query('SELECT * FROM produits');
				}
				if ($donnees = $reponse->fetch()){
				
				$colonne="1";
				?>
					<section class="row ">
						<div class="col-md-1">
						</div>
						<div class="box col-md-4 annonce">
							<a href="Page-Objet.php?Id=<?php echo $donnees['Id']?>">
							<h3> <?php echo $donnees['Nom']; ?>:</h3><br />
							</a>
							<strong>Description :</strong> <?php echo $donnees['Description']; ?> <br/>
							<strong>Prix :        </strong><?php echo $donnees['Prix']; ?> € <br/> 
							<?php echo "<img src=\"{$donnees["Photo"]}\" width=\"200\" height=\"100\"  class=\" img-responsive img-border img-full\">"; ?> 
						</div>
					
				<?php
				// On affiche chaque entrée une à une
				while ($donnees = $reponse->fetch())
				{
					
					if ($colonne == "0" AND $donnees['Vendu']=='0'){
				?>
					<section class="row ">
						<div class="col-md-1">
						</div>
						
						<div class="box col-md-4 annonce">
							<a href="Page-Objet.php?Id=<?php echo $donnees['Id']?>">
							<h3> <?php echo $donnees['Nom']; ?>:</h3><br />
							</a>
							<strong>Description :</strong> <?php echo $donnees['Description']; ?> <br/>
							<strong>Prix :        </strong><?php echo $donnees['Prix']; ?> € <br/> 
							<strong>Vendeur :        </strong><?php echo $donnees['NomDuVendeur']; ?> <br/> 
							<?php echo "<img src=\"{$donnees["Photo"]}\" width=\"200\" height=\"200\"  class=\"img-border img-full\">"; ?> 
						</div>
						
				    
				<?php
				}
					elseif ($colonne == "1" AND $donnees['Vendu']=='0'){
				?>
						<div class="col-md-2">
						</div>
							
							<div class="box col-md-4 annonce">
								<a href="Page-Objet.php?Id=<?php echo $donnees['Id']?>">
								<h3> <?php echo $donnees['Nom']; ?>:</h3><br />
								</a>
								<strong>Description :</strong> <?php echo $donnees['Description']; ?> <br/>
								<strong>Prix :       </strong><?php echo $donnees['Prix']; ?> € <br/> 
								<strong>Vendeur :        </strong><?php echo $donnees['NomDuVendeur']; ?> <br/> 
								</strong><?php echo "<img src=\"{$donnees["Photo"]}\" width=\"200\" height=\"200\"  class=\"img-border img-full\">"; ?> 
							</div>
							</a>
						</section>
				    
				<?php
				}
				$colonne=!$colonne; //on inverse la colonne à chaque tour
				}

				$reponse->closeCursor(); // Termine le traitement de la requête
				}
				?>

 
 </div>

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