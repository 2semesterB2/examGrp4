<?php 
$c1="";
$c2="";
$c3="";
$c4="";
$c5="";
$c6="";
$c7="";

if ($current==1) {$c1 ="class='current'";}; 
if ($current==2) {$c2 ="class='current'";}; 
if ($current==3) {$c3 ="class='current'";}; 
if ($current==4) {$c4 ="class='current'";}; 
if ($current==5) {$c5 ="class='current'";}; 
if ($current==6) {$c6 ="class='current'";}; 
if ($current==7) {$c7 ="class='current'";}; 
?>

<header>
 <div class="row">
    <div class="col-xs-offset-1 col-xs-2 col-sm-offset-1 col-sm-2">
		<a href="index.php"> <img src="../images/klatresjov-logo-mellem.png"  alt="Klatresjov's logo" id="logo"></a>
	</div> 
	 
	<div class="col-xs-offset-4 col-xs-4 col-sm-offset-5 col-sm-3 text-right">
		<button id="menuknap" data-toggle="collapse" data-target="#menu-indhold"><p class="menuoverskrift">menu<span class="glyphicon glyphicon-menu-hamburger"></span></p></button>

		<ul id="navigation">		
			<div id="menu-indhold" class="collapse text-right menu-baggrund">
			<?php echo "
			<li $c1><a href='index.php'><p class='menupunkter'>Forside</p></a></li>
			<li $c2><a href='pakkerogpriser.php'><p class='menupunkter'>Pakker og priser</p></a></li>
			<li $c3><a href='praktisk-info.php'><p class='menupunkter'>Praktisk info</p></a></li>
			<li $c4><a href='booking.php'><p class='menupunkter'>Book</p></a></li>
			<li $c5><a href='om os.php'><p class='menupunkter'>Om os</p></a></li>
			<li $c6><a href='index.php'><p class='menupunkter'>Galleri</p></a></li>
			<li $c7><a href='kontakt.php'><p class='menupunkter'>Kontakt</p></a></li>
			
			"
			?>
			</div>
		</ul>
	</div>
</div>
	
</header>