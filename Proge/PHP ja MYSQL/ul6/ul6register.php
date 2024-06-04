<?php
include('config.php');
if (isset($_POST['register'])) {
    # code...
$kasutajanimi = $_POST['kasutajanimi'];
$parool = $_POST['parool'];
$sool = 'taiestisuvalinetekst';
$kryp = crypt($parool, $sool);
# andmebaasi kasutaja lisamine
$paring = 'SELECT * FROM muusika';
$valjund = mysqli_query($yhendus, $paring);
if (strlen($parool) < 8) {
    echo "Parool on liiga lühike!";
    exit;
}
else if (strlen($parool > 60)){
    echo "Parool on liiga pikk!";
    exit;
}
else if (mysqli_num_rows($valjund) > 0) {
    echo "Kasutaja on juba olemas!";
    exit;

}
$insert = "INSERT INTO kasutajad (kasutaja, parool) VALUES ('" . mysqli_real_escape_string($yhendus, $kasutajanimi) . "', '" . mysqli_real_escape_string($yhendus, $kryp) . "')";
if (mysqli_query($yhendus, $insert)) {
    echo "Kasutaja lisatud!";
} else {
    echo "Error: " . $insert . "<br>" . mysqli_error($yhendus);
}
}
?>

<button><a href="ul6admin.php">Tagasi</a></button>
