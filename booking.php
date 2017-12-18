<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Jeevith Mohanakumar, Daniel Christensen og Nina Dupont Lehtinen">
<title>Book dit besøg hos os - Det er nemt, hurtigt og sikkert</title>
<meta name="description" content="SKRIV NOGET HER">
<meta name="keywords" content="SKRIV NOGET HER">
<!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
<link href="https://fonts.googleapis.com/css?family=Abel|Anton" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
	<div class="container-fluid booking-wrapper">
	<?php 
	$current=4;
	include("includes/header.php"); 
	?>

		<section class="content">
			<div class="row">
				<div class="col-sm-offset-1 col-sm-6">
				  <div class="text-box animated pulse">
						<h1>Book et besøg hos os</h1>
					<div class="row trin">
							<div class="col-sm-4">
								<p class="trin1">1<br>Antal deltagere,<br>dato og tid</p>
							</div>
							<div class="col-sm-4">
								<p class="trin2">2<br>Oplysninger</p>
							</div>
							<div class="col-sm-4">
								<p class="trin3">3<br>Betaling og<br>bekræftigelse</p>
							</div>
					  	</div>
					  
					  <div class="row">
					  	<div class="col-sm-6">
							<div class="form-group text-right">
								<label for="antal-voksne">Antal voksne</label>
								<div id="antal-voksne">
									<input type="button" value="-" id="minus" onclick="minus()">
    								<input type="text" value="1" id="count">
    								<input type="button" value="+" id="plus" onclick="plus()">
								</div>
							</div>
						</div>
						  
						<div class="col-sm-6">
							<div class="form-group text-left">
								<label for="antal-born">Antal børn</label>
								<div id="antal-born">
									<input type="button" value="-" id="minus" onclick="minus()">
    								<input type="text" value="1" id="count">
    								<input type="button" value="+" id="plus" onclick="plus()">
								</div>
							</div>
						</div>  
					  </div>
					  
					  <div class="row">
					  	<div class="col-sm-12">
						 <form action="#" class="ws-validate">
     <h2>A normal input datepicker</h2>

    <div class="form-row show-inputbtns">
        <input type="date" data-date-inline-picker="false" data-date-open-on-focus="true" />
    </div>
    <div class="form-row">
        <input type="submit" />
    </div>
</form>
						  </div>
					  </div>
					  
				  </div>
				</div>

				<div class="col-sm-4">
					<div class="text-box animated pulse">
						<h1>Godt at vide</h1>
						<h3>Manden bag Klatresjov klatre selv</h3>
						<p>This index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content! If you need some help hit up theThis index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content! If you need some help hit up theThis index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content! This index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content! If you need some help hit up theThis index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content! If you need some help hit up theThis index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content! This index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content! If you need some help hit up theThis index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content! If you need some help hit up theThis index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content!</p>
					</div>
				</div>
			</div>
			<!-- end row -->
		</section>

		<?php include("includes/footer.php"); ?>

		<script src="js/myjava.js"></script>
		<script src="js/jquery-1.11.3.min.js"></script>
        <!-- <script src="js/bootstrap.js"></script> -->
      <script src="js/bootstrap-3.3.7.js"></script>
<!-- <script src="js/bootstrap.js"></script> -->
</div>
</body>
</html>