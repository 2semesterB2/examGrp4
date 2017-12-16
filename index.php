<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 	<meta name="author" content="Jeevith Mohanakumar, Daniel Christensen og Nina Dupont Lehtinen">
	  <title>Klatresjov - Klatring for sjov for folk i alle aldre</title>
	  <meta name="description" content="SKRIV NOGET HER">
	  <meta name="keywords" content="SKRIV NOGET HER">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
	  <link rel="stylesheet" href="css/animate.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|Anton" rel="stylesheet">
</head>
	  
<body>
<div class="container-fluid forside-wrapper">	
<?php 
	$current=1;
	include("includes/header.php"); 
?>
		
<section class="content">
	<div class="row">
     <div class="col-xs-offset-0 col-xs-10 col-md-offset-4 col-md-7"> <!-- right-colums -->
		 <div class="row">
			 <div class="col-xs-8 col-sm-8 col-md-7 text-right">
		 		<a href="pakkerogpriser.php"><button id="pakker-forside" type="button" class="btn btn-default knapper"><h2 class="pakker-priser">pakker<br><span id="pristext">og priser</span></h2></button></a>
			 </div>
			 
			 <div class="col-xs-4 col-sm-4 col-md-5 text-left">
			 	<a href="index.php"><button id="galleri-forside" type="button" class="btn  btn-default knapper"><h2 class="storh2">galleri</h2></button></a>
				 
				 <div class="row">
				 	<div class="col-xs-12 col-md-12">
						<a href="om-os.php"><button id="om-os-forside" type="button" class="btn  btn-default knapper"><h2 class="lilleh2">om os</h2></button></a>
					 </div>
				 </div>
			 </div>
		 </div>
		 
		 <div class="row">
		 	<div class="col-xs-7 col-md-5 text-right">
				<a href="kontakt.php"><button id="kontakt-forside" type="button" class="btn btn-default knapper"><h2 class="lilleh2">kontakt</h2></button></a>
			 
				<div class="row">
					<div class="col-xs-12 col-md-12 text-right">
						<a href="booking.php"><button class="book" type="button" class="btn btn-default"><h2 class="book-knap">book</h2></button></a>
					</div>
				</div>
			 </div>
		 
		 <div class="col-xs-5 col-md-7 text-left">
			 <a href="praktisk-info.php"><button id="praktisk-info-forside" type="button" class="btn btn-default knapper"><h2 class="knap-text praktiskinfotext storh2"><span id="info-text-forside">praktisk</span><br>info</h2></button></a>
		 </div>
	 </div> 
	</div><!-- end right colum with buttons -->
	
    </div>
</section>

	
<?php include("includes/footer.php"); ?>	


	  
	<script src="js/myjava.js"></script>
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
	
  </body>
</html>