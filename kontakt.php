<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Jeevith Mohanakumar, Daniel Christensen og Nina Dupont Lehtinen">
<title>Book dit besøg hos os - Det er nemt, hurtigt og sikkert</title>
<title>Kontakt os - Grupper over 25 personer, spørgsmål, presse mm.</title>
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
	<div class="container-fluid praktisk-info-wrapper">
	<?php 
	$current=7;
	include("includes/header.php"); 
	?>

		<section class="content">
			<div class="row">
				<div class="col-sm-offset-1 col-sm-6">
				  <div class="text-box">
						<h1>Kontakt os</h1>
					<div class="row">
							<div class="col-sm-12">
								<p>Har du spørgsmål, eller ønsker du at booke en tur til over 25 personer, så send os en besked her, og vi vender tilbage til dig på mail inden længe. </p>
							</div>
					  </div>
					  <div class="row">
					  	<div class="col-sm-12">
							<form action="sendmail.php" method="post" id="kontaktform">
								<div class="row">
            						<div class="form-group col-sm-6">
                						<!-- <label for="name" class="h4">Name</label> -->
                						<input type="text" class="form-control" id="name" placeholder="Dit navn" required>
										<div class="help-block with-errors"></div>
            						</div>
            						<div class="form-group col-sm-6">
               							<!-- <label for="email" class="h4">E-mail</label> -->
                						<input type="email" class="form-control" id="email" placeholder="Din e-mail" required>
										<div class="help-block with-errors"></div>
            						</div>
        						</div>
        						<div class="form-group">
            						<!-- <label for="message" class="h4 ">Message</label> -->
           							<textarea id="message" class="form-control" rows="5" placeholder="Hvad drejer din henvendelse sig om?" required></textarea>
									<div class="help-block with-errors"></div>
        						</div>
        						<button type="submit" id="form-submit" class="btn knapper pull-right ">send</button>
					<div id="msgSubmit" class="h3 text-center hidden"></div>

								
							</form>
						</div>
						<div class="col-sm-6">
							
						</div> 
					</div>
					  </div> 
				</div>
				<div class="col-sm-4">
					<div class="text-box">
						<h1>Godt at vide</h1>
						<h3>Manden bag Klatresjov klatre selv</h3>
						<p>This index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content! If you need some help hit up theThis index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content! If you need some help hit up theThis index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content! This index.html page is a placeholder with the CSS, font and favicon. </p>
					</div>
					</div>
					
				
				</div><!-- end row -->
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