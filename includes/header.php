<?php 
$c1="";
$c2="";
$c3="";
if ($current==1) {$c1 ="class='current'";}; 
if ($current==2) {$c2 ="class='current'";}; 
if ($current==3) {$c3 ="class='current'";}; 
if ($current==4) {$c4 ="class='current'";}; 
if ($current==5) {$c5 ="class='current'";}; 
if ($current==6) {$c6 ="class='current'";}; 

?>
<header>
 <div class="row">
    <div class="col-md-offset-1 col-md-2">
		<a href="#"> <img src="../images/klatresjov-logo.png"  alt="Klatresjov's logo" id="logo"></a>
	</div> 
	 
	<div class="col-sm-offset-5 col-sm-3 text-right">
		<button id="menuknap" data-toggle="collapse" data-target="#menu-indhold"><p class="menuoverskrift">menu<span class="glyphicon glyphicon-menu-hamburger"></span></p></button>

		<ul id="navigation">		
			<div id="menu-indhold" class="collapse text-right">
			<?php echo "
			<li $c1><a href=''><p class='storoverskrift'>Forside</p></a></li>
			<li $c2><a href=''><p class='storoverskrift'>Pakker og priser</p></a></li>
			<li $c3><a href=''><p class='storoverskrift'>Praktisk info</p></a></li>
			<li $c4><a href=''><p class='storoverskrift'>Book</p></a></li>
			<li $c5><a href=''><p class='storoverskrift'>Galleri</p></a></li>
			<li $c6><a href=''><p class='storoverskrift'>Kontakt</p></a></li>
			"
			?>
			</div>
		</ul>
	</div>
</div>
	
</header>