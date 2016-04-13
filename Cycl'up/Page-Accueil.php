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

    <title> Cycl'Up !</title>

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

    <?php include("Page-Menu.php"); ?>   
 
  	<!-- Three columns of text below the carousel -->
    <div class="row-fluid">
    <div class="col-md-2">
    </div>
	    <a href="Page-Acheter.php">
        <div class="col-md-3">
          <img class="img-circle" src="img/acheter.jpg" alt="Generic placeholder image" width="300" height="300"></div>
        </a>     
        <div class="col-md-2">
        </div>
        <!-- /.col-lg-4 -->
		<a href="Page-Formulaire.php">
        <div class="col-md-3">
          <img class="img-circle" src="img/vendre.jpg" alt="Generic placeholder image" width="300" height="300">
          </br>

        </div><!-- /.col-lg-4 -->
        </a>
		
    <div class="row-fluid">
     <div class="col-md-3">
       </div>
	<a href="Page-Acheter.php">
    <div class="col-md-2">
    <h2 style="color:white">Acheter</h2>
          <p></p>
          
    </div>
	</a>
    <div class="col-md-3">
    </div>
	
	<a href="Page-Formulaire.php">
    <div class="col-md-3">
    <h2 style="color:white">Vendre</h2>
          <p></p>
    </div>
	</a>
	
	</div>
    
    
    <div class="row">
    
    	<div class="col-md-2">
     	</div>
     	
        <div class="col-md-3">
        <img class="img-circle" src="img/creer.jpg" alt="Generic placeholder image" width="300" height="300">
        </div>
        
    	<div class="col-md-2">
     	</div>
     	
        <!-- /.col-lg-4 -->
        <div class="col-md-3">
        <img class="img-circle" src="img/localiser.jpg" alt="Generic placeholder image" width="300" height="300">
        </div><!-- /.col-lg-4 -->
        
      </div><!-- /.row -->
      
      
      <div class="row-fluid">
     <div class="col-md-3">
       </div>
    <div class="col-md-1">
          <p><h2 style="color:white">Créer</h2></p>
    </div>
    
    <div class="col-md-4">
       </div>
    <div class="col-md-4">
          <p><h2 style="color:white">Localiser</h2></p>
    </div>
    
 <div class="row-fluid">
 </div>
 
  <div class="row-fluid">
  </div>
  
  </br></br></br>

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