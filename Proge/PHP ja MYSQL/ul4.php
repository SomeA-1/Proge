
<?php
include('config.php');
#Kui sa vaatad meie tabelit ‘arved’, siis seal on veerg ‘kliendid_id’.
#Sinu ülesandeks on tekitada vastav klientide tabel, väljadega eesnimi, perenimi ja telefoninumber ning siduda see arvete tabeliga
#Väljundina täienda olemasoelvat näidet nii, et ma näeksin ostu sooritanud kliendi nime

$paring = "SELECT arved.arve_nr, muusika.artist, muusika.album
			FROM arved, muusika, kliendid
			JOIN muusika ON arved.albumi_id=muusika.id
            JOIN kliendid ON arved.kliendi_id=kliendid.id";
$valjund = mysqli_query($yhendus, $paring);
while($rida = mysqli_fetch_assoc($valjund)){
echo 'Arve number: '.$rida['arve_nr'].'<br>';
echo 'Toote nimetus: '.$rida['artist'].'-'.$rida['album'].'<br><br>';
echo 'Kliendi nimi: '.$rida['eesnimi'].' '.$rida['perenimi'].'<br><br>';
}
mysqli_free_result($valjund);
mysqli_close($yhendus);	
?>