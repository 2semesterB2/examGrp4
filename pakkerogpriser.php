<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="author" content="Jeevith Mohanakumar, Daniel Christensen og Nina Dupont Lehtinen">
	  <title>Pakker og priser - børnefødselsdag, polterabend, dates m.fl.</title>
	  <meta name="description" content="SKRIV NOGET HER">
	  <meta name="keywords" content="SKRIV NOGET HER">
	  
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
	  <link rel="stylesheet" href="css/animate.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|Anton" rel="stylesheet">
</head>
	  
<body>
<div class="container-fluid pakker-priser-wrapper">	
<?php 
	$current=2;
	include("includes/header.php"); 
?>
		
	
<section class="content">
	<div class="row">
    	<div class="hidden-xs col-sm-offset-1 col-sm-4">
			<div id="solv-pakke-tekst" style="display:none;" class="answer_list" >
			<div class="text-box animated pulse">
     		<h1>sølv-pakken</h1>
        	<p>Udfordre bla bla bla</p>
        	<h3> Skyd på kaninen</h3>
        	<p>This index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content! If you need some help hit up theThis index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content! If you need some help hit up theThis index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content!
			This index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content! If you need some help hit up theThis index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content! If you need some help hit up theThis index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content!
			</p>
     </div>
		</div>
		</div>
     <div class="col-xs-offset-0 col-xs-10 col-sm-offset-0 col-sm-6"> <!-- right-colums -->
		 <div class="row">
			 <div class="col-xs-8 col-sm-8 col-md-8 text-right">
		 		<button id="firma" type="button" class="btn btn-default knapper"><h2 class="lilleh2 animated pulse">firma-<br>arrangement</h2></button>
				 
		 		<div class="row">
				 	<div class="col-sm-12">
						<button id="solv" type="button" name="answer" value="Show Div" onclick="showDiv()" class="btn btn-default knapper"><h2 class="mellemh2 animated pulse">sølv-pakken</h2></button>
					</div>
				</div>
			 </div>
			 
			 <div class="col-xs-4 col-sm-4 col-md-4 text-left">
			 	<button id="guld" type="button" class="btn  btn-default knapper"><h2 class="mellemh2 animated pulse">guld-<br>pakken</h2></button>
			 </div>
		 </div>
		 
		 <div class="row">
		 	<div class="col-xs-7 col-sm-5 text-right">
				<button id="polterabend" type="button" class="btn btn-default knapper"><h2 class="lilleh2 animated pulse">Polterabend</h2></button>
			 
				<div class="row">
					<div class="col-xs-12 col-md-12 text-right">
						<a href="booking.php"><button id="book" type="button" class="btn btn-default"><h2 class="book-knap animated pulse">book</h2></button></a> <!-- når id="book", virker knappen som den skal.. selvom id'et bliver brugt flere steder? .. bruger jeg class, kommer der en grå kant rundt om knappen, som ikke er ønsket. -->
					</div>
				</div>
			 </div>
		 
		 <div class="col-xs-5 col-md-7 text-left">
			 <button id="basis" type="button" class="btn btn-default knapper"><h2 class="mellemh2 animated pulse">basis-pakken</h2></button>
		 
		 	<div class="row">
				<div class="col-xs-12 text-left">
					<button id="born" type="button" class="btn btn-default knapper"><h2 class="lilleh2 animated pulse">børnefødselsdag</h2></button>
				</div>
		 	</div>
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