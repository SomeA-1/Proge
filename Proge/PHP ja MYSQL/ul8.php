<?php
#Sinu ülesandeks on luua samasugune uudiste KUVAMISE leht
#Uudiste kuvamise leht on jagatud lehekülgedeks, 100 uudist korraga
#Kuva
##andmete hulk andmebaasis
##mitu uudist korraga näidatakse
##mitu lehekülge on kokku
include('config.php');
//uudiseid ühel lehel
$uudiseid_lehel = 100;
$total_uudiseid = 1000;
//lehtede arvutamine
$uudiseid_kokku_paring = "SELECT COUNT('id') FROM uudis";
$lehtede_vastus = mysqli_query($yhendus, $uudiseid_kokku_paring);
$uudiseid_kokku = mysqli_fetch_array($lehtede_vastus);
$lehti_kokku = $uudiseid_kokku[0];
$lehti_kokku = ceil($lehti_kokku/$uudiseid_lehel);
//var_dump($lehti_kokku);
echo 'Lehekülgi kokku: '.$lehti_kokku.'<br>';
echo 'Uudiseid lehel: '.$uudiseid_lehel.'<br>';
echo 'Uudiseid andmebaasis: '.$total_uudiseid.'<br>';
//kasutaja valik
if (isset($_GET['page'])) {
	$leht = $_GET['page'];
} else {
	$leht = 1;
}
//millest näitamist alustatakse
$start = ($leht-1)*$uudiseid_lehel;

$eelmine = $leht - 1;
$jargmine = $leht + 1;
if ($leht>1) {
	echo "<a href=\"?page=$eelmine\">Eelmine</a> ";
}
if ($lehti_kokku >= 1) {
	for ($i=1; $i<=$lehti_kokku ; $i++) { 
		if ($i==$leht) {
			echo "<b><a href=\"?page=$i\">$i</a></b> ";
		} else {
			echo "<a href=\"?page=$i\">$i</a> ";
		}
		
	}
}
if ($leht<$lehti_kokku) {
echo "<a href=\"?page=$jargmine\">Järgmine</a> ";
}

//andmebaasist andmed
$paring = "SELECT * FROM uudis LIMIT $start, $uudiseid_lehel";
$vastus = mysqli_query($yhendus, $paring);
//väljastamine
while ($rida = mysqli_fetch_assoc($vastus)){
	//var_dump($rida);
	echo '<h3>'.$rida['pealkiri'].'</h3>';
	echo '<p>'.$rida['artikkel'].'</p>';
}
?>
