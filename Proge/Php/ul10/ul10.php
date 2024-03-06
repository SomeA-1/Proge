<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
<menu>
    <a href="ul10.php">Avaleht</a>
    <a href="ul10.php?leht=portfoolio">Portfoolio</a>
    <a href="ul10.php?leht=kaart">Kaart</a>
    <a href="ul10.php?leht=kontakt">Kontakt</a>
</menu>
<?php
// Arko Avarsalu, Ül 10, 19.2.24
if(!empty($_GET['leht'])){
	$leht = htmlspecialchars($_GET['leht']);
	$lubatud = array('portfoolio','kaart','kontakt');
	$kontroll = in_array($leht, $lubatud);
	if($kontroll==true){
		include($leht.'.php');
	} else {
		echo 'Valitud lehte ei eksisteeri!';
	}
}

?>
</div>
</body>
</html>