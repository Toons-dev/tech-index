

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title></title>
		<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script> <![endif]-->
	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
		
		<?php
 			include 'navbar.php';
		?>
		

		<div class="row">
			<div class="col-12 col-md-8" style="padding: 50px; background-image: url('images/back.jpg');">			
				<h1>Bienvenue sur le site de la boutique Tech'Info</h1>
				<p style="color: white;"><i>Experts sur le secteur informatique depuis 1995</i></p>
			</div>
			
			<div class="top d-none d-md-block col-4">
				<form>
					<h2>Connectez vous !</h2>
	  				<div class="form-group">
	    				<label for="exampleInputEmail1">Email address</label>
	    				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
	  				</div>
	  				<div class="form-group">
	    				<label for="exampleInputPassword1">Password</label>
	    				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	  				</div>
	  				<div class="form-group form-check">
	    				<input type="checkbox" class="form-check-input" id="exampleCheck1">
	    				<label class="form-check-label" for="exampleCheck1">Check me out</label>
	  				</div>
	  				<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>	
		</div>
		
		<div class="row" style="padding: 20px;">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="card">
					<img src="images/mac.jpg" class="card-img-top" alt="..." style="padding: 20px;">
					<div class="card-body">
					<h5 class="card-title">Portables</h5>
					<p class="card-text">Nous vous proposons en exclusivité ce mois-ci les portables mac dernière génération.</p>
					<a href="#" class="btn btn-primary">Acheter</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4">
				<div class="card">
					<img src="images/full.png" class="card-img-top" alt="..."  style="padding: 20px;">
					<div class="card-body">
					<h5 class="card-title">Packs</h5>
					<p class="card-text">La boutique confectionne pour vous des packs pour débuter.</p>
					<a href="#" class="btn btn-primary">Explorer</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4">
				<div class="card">
					<img src="images/product.png" class="card-img-top" alt="..." style="padding: 20px;">
					<div class="card-body">
					<h5 class="card-title">Accessoires</h5>
					<p class="card-text">Pour plus de fonctionnalités, équipez vous !</p>
					<a href="#" class="btn btn-primary">Voir</a>
					</div>
				</div>
			</div>
		</div>

		<?php
 			include 'footer.php';
		?>

	<script
  		src="https://code.jquery.com/jquery-3.4.1.min.js"
  		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  		crossorigin="anonymous"></script>
	<script type="text/javascript" src="script/main.js"></script>

	</body>
</html>

