
<h1>Iseseisvad</h1>
<h2>Esimene ja teine</h2>
<form action="iseseisev.php" method="get">
        Sisesta oma isikukood <input type="text" name="t1"><br>
        <input type="submit" value="Saada">
    </form>

<?php
//AASTAAJAD – kuva aastaaja pilt vastavalt kasutaja sünnikuule
//ja
//ISIKUKOOD – Kasutaja lisab isikukoodi ning sinu kood tuvastab tema soo ja sünniaasta. Enne kui lahendama hakkad, siis kontrolli kas kood on piisava pikkusega
$kevad = array("3", "4", "5");
$suvi = array("6", "7", "8");
$sügis = array("9", "10", "11");
$talv = array("12", "1", "2");
error_reporting(0);
$naine = array("2", "4", "6");
$mees = array("1", "3", "5");



	//lisab vormist saadud andmed muutujasse
	$isikukood = strval($_GET['t1']);
    $skp = substr($isikukood, 3, 2);
    $sa = substr($isikukood, 1, 2);
    
    //echo $skp;
    if(in_array($isikukood[0], $mees)){
        echo "Sugu: mees";
    }
    elseif(in_array($isikukood[0], $naine)){
        echo "Sugu: naine";
    }
    else{
        echo "Vale isikukood";
    }
    echo "<br>";
    if ($isikukood[0] == 3 || $isikukood[0] == 4){
        $aasta = "19" . $sa;
    }
    elseif ($isikukood[0] == 5 || $isikukood[0] == 6){
        $aasta = "20" . $sa;
    }
    echo "Sünniaasta: " . $aasta;
    echo "<br>";

    if (in_array($skp, $kevad)){
            $img_src = "kevad.jpg";
    }
    elseif (in_array($skp, $suvi)){
        $img_src = "suvi.jpg";
    }
    elseif (in_array($skp, $sügis)){
        $img_src = "sugis.jpg";
    }
    elseif (in_array($skp, $talv)){
        $img_src = "talv.jpg";
    }
    echo "<img src='aastaaeg/" . $img_src . "' alt='img'>";
?>

<h2>Kolmas</h2>
<?php
$i = 10;
while ($i > 0) {
    echo $i--;
    echo "<br>";
}
?>

<h2>Neljas</h2>
<?php
//PÄIKE JA KUU – Koosta kood, mis kuvab päikese pildi, kui kell on 7:00 ja kuu, kui kell on 22:00
$dt = new DateTime("now", new DateTimeZone('Europe/Tallinn'));
echo $dt->format('H:i:s');
echo "<br>";
if ($dt->format('H') > 7 && $dt->format('H') < 22){
    $kellaeg = "paike.jpg";
}
else{
    $kellaeg = "kuu.jpg";
}
echo "<img src='aastaaeg/" . $kellaeg . "' alt='img'>";
?>

