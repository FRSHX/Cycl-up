<!DOCTYPE htm>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="psn.css" />
		<title> Le Grand Bazar </title>
		<link href="bootstrap.css" rel="stylesheet">
		<script src="bootstrap.js"></script>
		<script src="jquery-2.1.4.js"></script>
		<script src="bootstrap.js"></script>
	</head>
	<body>
		<div id="block_page">
			<?php include("Menu.php"); ?>
			<div id="accueil">
				<section class="row"><!--première ligne, deux images-->
					<div class="col-md-1">
					</div>
					<a href="Acheter.php">
					<div class="col-md-5"id="Acheter">
						<h2>Acheter</h2>
						<div id="myCarousel" class="carousel slide">
						<!-- Indicators -->
						<ol class="carousel-indicators">
						  <li class="item1 active"></li>
						  <li class="item2"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">

						  <div class="item active" >
							<img src="pnoufs-2-BDredim.jpg" alt="Pnoufs" width="800" height="500">
							<div class="carousel-caption">
							  <h3>Pnoufs</h3>
							  <p>Recyclez de vieux pneus en poufs</p>
							</div>
						  </div>

						  <div class="item">
							<img src="pnoufs-BDredim.jpg" alt="Chania" width="800" height="500">
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
					<a href="Vendre.php">
					<div class="col-md-5"id="Vendre">
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
							<img src="pnoufredim.jpg" alt="Pnoufs" width="800" height="500">
							<div class="carousel-caption">
							  <h3>Pnoufs</h3>
							  <p>Recyclez de vieux pneus en poufs</p>
							</div>
						  </div>

						  <div class="item">
							<img src="tabouretcassettes-BDredim.jpg" alt="tabouretcassettes" width="800" height="500">
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
				<section class="row"><!--cercle-->
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						<img src="pnoufs-BD.jpg" alt="pnoufs" class="img-circle" id="image-cercle">
					</div>
					<div class="col-md-4">
					</div>
				</section>
				<section class="row"><!--première ligne, deux images-->
					<div class="col-md-1">
					</div>
					<div class="col-md-5"id="Associations">
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
							<img src="pnoufs-2-BDredim.jpg" alt="Pnoufs" width="800" height="500">
							<div class="carousel-caption">
							  <h3>Pnoufs</h3>
							  <p>Recyclez de vieux pneus en poufs</p>
							</div>
						  </div>

						  <div class="item">
							<img src="pnoufs-BDredim.jpg" alt="Chania" width="800" height="500">
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
					<div class="col-md-5"id="Activités">
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
							<img src="pnoufredim.jpg" alt="Pnoufs" width="800" height="500">
							<div class="carousel-caption">
							  <h3>Pnoufs</h3>
							  <p>Recyclez de vieux pneus en poufs</p>
							</div>
						  </div>

						  <div class="item">
							<img src="tabouretcassettes-BDredim.jpg" alt="tabouretcassettes" width="800" height="500">
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
					<div class="col-md-1">
					</div>
				</section>
				
				</div>
			<?php include("Footer.php"); ?>
		</div>
	</body>
</html>