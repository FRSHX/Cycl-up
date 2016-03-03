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
		<?php include("Menu.php"); ?>
		<div id="block_page" class= "container">  							<!--page globale-->
			
			<div id="centre">
				<section class="row">					<!--deux images supérieures du rectangle (acheter et vendre) -->
					
					<div class="col-md-1">
					</div>
					
					<a href="Acheter.php">				<!--Image Acheter et lien vers les annonces-->
					<div class="col-md-5">
						<h2>Trouver un objet</h2>
						<div id="myCarousel" class="carousel slide">	
						<!-- Indicators -->
						<ol class="carousel-indicators">
						  <li class="item1 active"></li>
						  <li class="item2"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">

						  <div class="item active" >
							<img src="images/pnoufs-2-BDredim.jpg" alt="Pnoufs" width="800" height="500">
							<div class="carousel-caption">
							  <h3>Pnoufs</h3>
							  <p>Recyclez de vieux pneus en poufs</p>
							</div>
						  </div>

						  <div class="item">
							<img src="images/pnoufs-BDredim.jpg" alt="Chania" width="800" height="500">
							<div class="carousel-caption">
							  <h3>Pnoufs</h3>
							  <p>Laissez libre cour a votre imagination</p>
							</div>
						  </div>
					  
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" role="button">
						  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						  <span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button">
						  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						  <span class="sr-only">Next</span>
						</a>
					  </div>

					<script>
					$(document).ready(function(){
						// Activate Carousel
						$("#myCarousel").carousel();
						
						// Enable Carousel Indicators
						$(".item1").click(function(){
							$("#myCarousel").carousel(0);
						});
						$(".item2").click(function(){
							$("#myCarousel").carousel(1);
						});
						
						// Enable Carousel Controls
						$(".left").click(function(){
							$("#myCarousel").carousel("prev");
						});
						$(".right").click(function(){
							$("#myCarousel").carousel("next");
						});
					});
					</script>
			
					</div>
					</a>
					
					<a href="Vendre.php">				<!--Image Acheter et lien vers la page vendre-->
					<div class="col-md-5">
						<h2>Vendre</h2>
						<div id="myCarousel1" class="carousel slide">
						<!-- Indicators -->
						<ol class="carousel-indicators">
						  <li class="item3 active"></li>
						  <li class="item4"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">

						  <div class="item active">
							<img src="images/pnoufredim.jpg" alt="Pnoufs" width="800" height="500">
							<div class="carousel-caption">
							  <h3>Pnoufs</h3>
							  <p>Recyclez de vieux pneus en poufs</p>
							</div>
						  </div>

						  <div class="item">
							<img src="images/tabouretcassettes-BDredim.jpg" alt="tabouretcassettes" width="800" height="500">
							<div class="carousel-caption">
							  <h3>tabouretcassettes</h3>
							  <p>Laissez libre cour a votre imagination</p>
							</div>
						  </div>
					  
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel1" role="button">
						  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						  <span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel1" role="button">
						  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						  <span class="sr-only">Next</span>
						</a>
					  </div>

					<script>
					$(document).ready(function(){
						// Activate Carousel
						$("#myCarousel1").carousel();
						
						// Enable Carousel Indicators
						$(".item3").click(function(){
							$("#myCarousel1").carousel(3);
						});
						$(".item4").click(function(){
							$("#myCarousel1").carousel(4);
						});
						
						// Enable Carousel Controls
						$(".left").click(function(){
							$("#myCarousel1").carousel("prev");
						});
						$(".right").click(function(){
							$("#myCarousel1").carousel("next");
						});
					});
					</script>
			
					</div>
					</a>
					
					<div class="col-md-1">
					</div>
					
				</section>
				
				<section class="row">					<!--deux images inférieures du rectangle (Associations et Activités)-->
					
					<div class="col-md-1">
					</div>
					
					<a href="Associations.php">			<!--Image Association et lien vers la page Associations-->
						<div class="col-md-5"> <!--Gestion du lien vers les Associations-->
							<h2>Associations</h2>
							<div id="myCarousel2" class="carousel slide">
							<!-- Indicators -->
							<ol class="carousel-indicators">
							  <li class="item1 active"></li>
							  <li class="item2"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">

							  <div class="item active">
								<img src="images/pnoufs-2-BDredim.jpg" alt="Pnoufs" width="800" height="500">
								<div class="carousel-caption">
								  <h3>Pnoufs</h3>
								  <p>Recyclez de vieux pneus en poufs</p>
								</div>
							  </div>

							  <div class="item">
								<img src="images/pnoufs-BDredim.jpg" alt="Chania" width="800" height="500">
								<div class="carousel-caption">
								  <h3>Pnoufs</h3>
								  <p>Laissez libre cour a votre imagination</p>
								</div>
							  </div>
						  
							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel2" role="button">
							  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel2" role="button">
							  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  <span class="sr-only">Next</span>
							</a>
						  </div>

						<script>
						$(document).ready(function(){
							// Activate Carousel
							$("#myCarousel2").carousel();
							
							// Enable Carousel Indicators
							$(".item1").click(function(){
								$("#myCarousel2").carousel(0);
							});
							$(".item2").click(function(){
								$("#myCarousel2").carousel(1);
							});
							
							// Enable Carousel Controls
							$(".left").click(function(){
								$("#myCarousel2").carousel("prev");
							});
							$(".right").click(function(){
								$("#myCarousel2").carousel("next");
							});
						});
						</script>
				
						</div>
					</a>
					
					<a href="Activites.php">			<!--Image Activités et lien vers la page Activités-->
						<div class="col-md-5">	<!--Gestion du lien vers les Activités-->
						<h2>Activités</h2>
						<div id="myCarousel3" class="carousel slide" href="Acheter.php">
						<!-- Indicators -->
						<ol class="carousel-indicators">
						  <li class="item3 active"></li>
						  <li class="item4"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">

						  <div class="item active">
							<img src="images/pnoufredim.jpg" alt="Pnoufs" width="800" height="500">
							<div class="carousel-caption">
							  <h3>Pnoufs</h3>
							  <p>Recyclez de vieux pneus en poufs</p>
							</div>
						  </div>

						  <div class="item">
							<img src="images/tabouretcassettes-BDredim.jpg" alt="tabouretcassettes" width="800" height="500">
							<div class="carousel-caption">
							  <h3>tabouretcassettes</h3>
							  <p>Laissez libre cour a votre imagination</p>
							</div>
						  </div>
					  
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel3" role="button">
						  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						  <span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel3" role="button">
						  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						  <span class="sr-only">Next</span>
						</a>
					  </div>

					<script>
					$(document).ready(function(){
						// Activate Carousel
						$("#myCarousel3").carousel();
						
						// Enable Carousel Indicators
						$(".item3").click(function(){
							$("#myCarousel3").carousel(3);
						});
						$(".item4").click(function(){
							$("#myCarousel3").carousel(4);
						});
						
						// Enable Carousel Controls
						$(".left").click(function(){
							$("#myCarousel3").carousel("prev");
						});
						$(".right").click(function(){
							$("#myCarousel3").carousel("next");
						});
					});
					</script>
			
					</div>
					</a>
					
					<div class="col-md-1">
					</div>
				</section>
				
			</div>
			<?php include("Footer.php"); ?>
		</div>
	</body>
</html>