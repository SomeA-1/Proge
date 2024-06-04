<?php
#Koosta php dokument, mis poogib ennast andmebaasi ‘muusikapood’ külge. NB! Andmebaasi ühendus hoia eraldifailis config.php (config.inc vms)
#Väljasta kogu ‘albumid’ sisu ridade kaupa (10 rida)
#Loo otsingukast, mis lubab valida, kas otsing toimub artistide või albumite veerust.
error_reporting(false);
include('config.php'); //andmebaasi paroolid ja ühendus on teises failis

if (!empty($_GET['otsi'])) {
	//kasutaja tekst vormist
	$otsi = $_GET['otsi'];
	$otsing = $_GET['otsing'];
	//päring
	if($otsing == 'artist'){
		$search = 'SELECT * FROM muusika WHERE artist LIKE "'.$otsi.'"';
	}
	elseif($otsing == 'album'){
		$search = 'SELECT * FROM muusika WHERE album LIKE "'.$otsi.'"';
	}
	elseif($otsing == 'both'){
		$search = 'SELECT * FROM muusika WHERE artist LIKE "'.$otsi.'" OR album LIKE "'.$otsi.'"';
	}
	else{
		$search = 'SELECT * FROM muusika WHERE artist LIKE "'.$otsi.'" OR album LIKE "'.$otsi.'"';
	}
	$valjund = mysqli_query($yhendus, $search);
	
	echo '<strong>Päring: '.$otsi.'</strong><br>';
	echo 'Vastused: <br>';
	while($rida = mysqli_fetch_assoc($valjund)){
		echo $rida['artist'].' - '.$rida['album'].' - '.$rida['aasta'].'<br>';
	}
	mysqli_free_result($valjund);
}
?>
<form method="get" action="">
	Otsing <input type="text" name="otsi">
	Otsingu tüüp:
<input type="radio" name="otsing" <?php if (isset($otsing) && $otsing=="artist") echo "checked";?> value="artist">artist
<input type="radio" name="otsing" <?php if (isset($otsing) && $otsing=="album") echo "checked";?> value="album">album
<input type="radio" name="otsing" <?php if (isset($otsing) && $otsing=="both") echo "checked";?> value="both">mõlemad
<input type="submit" value="Otsi">
</form>

<?php


$paring = 'SELECT * FROM muusika';
$valjund = mysqli_query($yhendus, $paring);

while($rida = mysqli_fetch_array($valjund)){
	echo '<strong>Artist: '.$rida[1].'</strong><br>';
	echo 'Album: '.$rida[2].'<br>';
    echo 'Aasta: '.$rida[3].'<br>';
    echo 'Hind: '.$rida[4].'€<br>';
    echo '<br>';
}
echo '<h2>-------Sorteeritud-------</h2>';
#Väljasta tabelist ainult artist ja album read, sorteeri kasvavalt artisti järgi (10 rida)

$paring2 = 'SELECT * FROM muusika ORDER BY artist ASC';
#See peaks seda tegema ¯\_(ツ)_/¯ idk man
$valjund2 = mysqli_query($yhendus, $paring2);
while($rida = mysqli_fetch_array($valjund2)){
	echo '<strong>Artist: '.$rida[1].'</strong><br>';
	echo 'Album: '.$rida[2].'<br>';
    echo '<br>';
}

echo '<h2>-------2010 ja uuemad-------</h2>';
#Väljasta tabelist ainult artist ja album read, mille aasta on 2010 ja uuemad
$paring3 = 'SELECT * FROM muusika';
$valjund3 = mysqli_query($yhendus, $paring3);
while($rida = mysqli_fetch_array($valjund3)){
	if($rida[3] >= 2010){
		echo '<strong>Artist: '.$rida[1].'</strong><br>';
		echo 'Album: '.$rida[2].'<br>';
		echo 'Aasta: '.$rida[3].'<br>';
		echo 'Hind: '.$rida[4].'€<br>';
		echo '<br>';
	}
}
echo '<h2>-------Keskmine hind ja koguväärtus-------</h2>';
#Väljasta kui palju erinevaid albumeid on andmebaasis, mis on nende keskmine hind ja koguväärtus (summa)
$paring4 = 'SELECT * FROM muusika';
$valjund4 = mysqli_query($yhendus, $paring4);
$keskhind = 0;
$albumeid = 0;
$koguvaartus = 0;

while($rida = mysqli_fetch_array($valjund4)){
	$keskhind += $rida[4];
	$albumeid++;
	$koguvaartus += $rida[4];
}
echo 'Erinevaid albumeid: '.$albumeid.'<br>';
echo 'Keskmine hind: '.round($keskhind/$albumeid, 2).'€<br>';
echo 'Koguväärtus: '.$koguvaartus.'€<br>';

echo '<h2>-------Kõige vanem album-------</h2>';
#Väljasta kõige vanema albumi nimed
$paring5 = 'SELECT * FROM muusika ORDER BY aasta ASC LIMIT 1';
$valjund5 = mysqli_query($yhendus, $paring5);
while($rida = mysqli_fetch_array($valjund5)){
	echo '<strong>Artist: '.$rida[1].'</strong><br>';
	echo 'Album: '.$rida[2].'<br>';
	echo 'Aasta: '.$rida[3].'<br>';
	echo 'Hind: '.$rida[4].'€<br>';
	echo '<br>';
}

echo '<h2>-------Kallimad kui avg albumid-------</h2>';
#Väljasta albumid, mille hind on kogu keskmisest suurem
$paring6 = 'SELECT * FROM muusika';
$valjund6 = mysqli_query($yhendus, $paring6);
while($rida = mysqli_fetch_array($valjund6)){
	if($rida[4] > round($keskhind/$albumeid, 2)){
		echo '<strong>Artist: '.$rida[1].'</strong><br>';
		echo 'Album: '.$rida[2].'<br>';
		echo 'Aasta: '.$rida[3].'<br>';
		echo 'Hind: '.$rida[4].'€<br>';
		echo '<br>';
	}
}

#mysqli_free_result($valjund);
#mysqli_close($yhendus);
?>