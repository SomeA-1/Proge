<?php
#Loo dokument, mis kuvab andmebaasist kõiki albumeid

error_reporting(false);
include 'config.php';
#Välista kasutaja poolelt “rämpsu” postitamist ja kood ei tohi väljastada veateateid
$paring = 'SELECT * FROM muusika';
$valjund = mysqli_query($yhendus, $paring);
#Tekita lehele vorm, mille kaudu saab andmeid juurde lisada
if (!empty($_POST['artist']) && !empty($_POST['album']) && !empty($_POST['aasta']) && !empty($_POST['hind'])) {
    $artist = $_POST['artist'];
    $album = $_POST['album'];
    $aasta = $_POST['aasta'];
    $hind = $_POST['hind'];
    $insert = "INSERT INTO muusika (artist, album, aasta, hind)
    VALUES ('" . mysqli_real_escape_string($yhendus, $artist) . "', '" . mysqli_real_escape_string($yhendus, $album) . "', '" . mysqli_real_escape_string($yhendus, $aasta) . "', '" . mysqli_real_escape_string($yhendus, $hind) . "')";
    if (mysqli_query($yhendus, $insert)) {
        echo "Lisatud andmebaasi, värskenda lehte!";
    } else {
        echo "Error: " . $insert . "<br>" . mysqli_error($yhendus);
    }
}
else {
    echo "Täida kõik väljad!";
}
?>
<form method="post" action="">
    <label for="artist">Artist</label>
<input type="text" name="artist"><br>
    <label for="album">Album</label>
<input type="text" name="album"><br>
    <label for="aasta">Aasta</label>
<input type="text" name="aasta"><br>
    <label for="hind">Hind</label>
<input type="text" name="hind"><br>
<input type="submit" value="lisa">
</form>
<?php
while($rida = mysqli_fetch_array($valjund)){
	echo '<strong>Artist: '.$rida[1].'</strong><br>';
	echo 'Album: '.$rida[2].'<br>';
    echo 'Aasta: '.$rida[3].'<br>';
    echo 'Hind: '.$rida[4].'€<br>';
    echo '<a href="ul3.php?kustutaID='.$rida[0].'">Kustuta</a> <br>'; 
    echo '<a href="ul3.php?muudaID='.$rida[0].'">Muuda</a>';
    echo '<br>';
}
#Täienda väljundi iga rida kahe lingiga: kustuta ja muuda
#Klikkides kustuta, kustutatakse vastav kirje andmebaasist
if (!empty($_GET['kustutaID'])) {
    $kustuta = 'DELETE FROM muusika WHERE id='.$_GET['kustutaID'];
    if (mysqli_query($yhendus, $kustuta)) {
        echo "Kustutatud andmebaasist, värskenda lehte!";
    } else {
        echo "Error: " . $kustuta . "<br>" . mysqli_error($yhendus);
    }
}
#Klikkides muuda, võimaldab antud kirjet muuta
if (!empty($_GET['muudaID'])) {
    $muuda = 'SELECT * FROM muusika WHERE id='.$_GET['muudaID'];
    $valjund = mysqli_query($yhendus, $muuda);
    $rida = mysqli_fetch_array($valjund);
    echo '<form method="post" action="">
    <label for="artist">Artist</label>
    <input type="text" name="artist" value="'.$rida[1].'"><br>
    <label for="album">Album</label>
    <input type="text" name="album" value="'.$rida[2].'"><br>
    <label for="aasta">Aasta</label>
    <input type="text" name="aasta" value="'.$rida[3].'"><br>
    <label for="hind">Hind</label>
    <input type="text" name="hind" value="'.$rida[4].'"><br>
    <input type="submit" value="muuda">
    </form>';
}




?>