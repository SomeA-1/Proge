<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<link rel="stylesheet" href="kt.css">
</head>
<!-- 
Arko Avarsalu, KT, 4.3.24
Koosta Bootstrap5 abil samasugune leht 1p
	- kohandub ja valideerub
Koosta menÃ¼Ã¼, millel klikkides sisu muutub dÃ¼naamiliselt 1p
	- teiste lehtede sisse pane lihtsalt pealkiri ja tekst
	- kui lehte ei eksisteeri, siis tuleb vastav teade
Kasuta massiivi, et avalehel Jumbotroni sees olev sisu kuvatakse suvaliselt (tekst ja pilt) 2p
Tooted tulevad CSV failist (pilt, nimetus, hind) 2p
Loo adminni leht, kus admin saab tooteid kustutada ja lisada 4p
-->
<body>
	<div id="grad" class="jumbotron text-black">
	<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light ">
		<a class="navbar-brand" href="#"><img src="img/image1.png" width="40px"> Avarsalu.com</a>
		
	<div class="collapse navbar-collapse" id="minuMenyy">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item active">
			<a class="nav-link" href="#">Avaleht</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Tooted</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Kontakt</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Admin</a>
		  </li>
		  <i class="bi bi-bag"></i>
		</ul>
	  </div>
	</nav>
	<div class="row">
			<div class="col">
				<h1 class="display-4">SUPER ALA- <br> EALISED, KÕIK -20%!</h1>
				<p ckass="lead">KINDLASTI kasutan bs5'e</p>
				<button type="button" class="btn btn-success">Vaata pakkumisi -></button>
			</div>
			<div class="col">
				<img src="img/image1.png" class="img-fluid float-right" width="1000">
			</div>
		</div>
	</div>
	<h3 class="text-center">Parimad pakkumised</h3>
	<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-4 center">
	<?php
        $file = fopen('tooted.csv', 'r');
        if ($file !== false) {
          while (($line = fgetcsv($file)) !== false) {
            $image = $line[0];
            $name = $line[1];
            $price = $line[2];
      ?>

        <div class="card border-light">
			<img src="<?php echo $image; ?>" class="card-img-top" height="300" alt="<?php echo $name; ?>">
         <div class="card-body">
		 <h5 class="card-title"><?php echo $name; ?></h5>
            <p class="card-text">Price: $<?php echo $price; ?></p>
        </div>
        </div>

		<?php
          }
          fclose($file);
        }
      ?>
</div>
</body>
</html>