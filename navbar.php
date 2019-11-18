<?php
$page = $_SERVER['PHP_SELF'];
?>
<nav class="navbar navbar-expand-lg navbar-light" style="padding: 30px;">
			<a class="navbar-brand" href="#">Tech'Info</a>

		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  	</button>

		  	<div class="collapse navbar-collapse" id="navbarNav ">
		    	<ul class="navbar-nav">
		      		<li class="nav-item <?php if($page == "/TechInfo/index.php"){
                          echo "active";
                      } ?>">
		        		<a class="nav-link" href="index.php">Notre selection<span class="sr-only">(current)</span></a>
		      		</li>
		      		<li class="nav-item <?php if($page == "/TechInfo/reparation.php"){
                          echo "active";
                      } ?>">
		        		<a class="nav-link" href="reparation.php">Réparation</a>
		      		</li>
		      		<li class="nav-item <?php if($page == "/TechInfo/inscription.php"){
                          echo "active";
                      } ?>">
		        		<a class="nav-link" href="inscription.php">Inscription</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="#">Contact</a>
		      		</li>
		    	</ul>
		  	</div>
        </nav>
        
