

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
            <div class="top col-12 col-md-6">
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

            <div class="d-none d-md-block user">
                <img src="images/user.png">           
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
