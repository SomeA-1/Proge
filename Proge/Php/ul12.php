<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
<?php
// Arko Avarsalu, Ül x, ..24
error_reporting(0);
//sõiduaeg
echo "<br><form action='#' method='get'> Stardi ja lõpu aeg (h:mm) <input type='text' name='sa'> <input type='text' name='la'> <input type='submit' value='Tee sõitu'></form><br>";
if (isset($_GET['sa']) && isset($_GET['la'])){
    $sa = $_GET['sa'];
    $la = $_GET['la'];
    $as = explode(":", $_GET['sa']);
    $al = explode(":", $_GET['la']);
    echo $as[0]-$al[0]."tundi ja ".$as[1]-$al[1]."minutit <br><br>" ;

}
//Soodiskriminatsioon csv failist
$allikas = 'tootajad.csv';
$minu_csv = fopen($allikas, 'r') or die('Ei leia faili!');
$maleCount = 0;
$femaleCount = 0;
$Mpalk = array();
$Npalk = array();
while (($data = fgetcsv($minu_csv, 1000, ";")) !== FALSE) {
    $name = $data[0];
    $gender = $data[1];
    $wage = $data[2];

    if ($gender === 'm') {
        $maleCount++;
        array_push($Mpalk, $wage);
    } elseif ($gender === 'n') {
        $femaleCount++;
        array_push($Npalk, $wage);
    }
}
fclose($minu_csv);
$mavg = round(array_sum($Mpalk) / $maleCount, 0);
$navg = array_sum($Npalk) / $femaleCount;
echo "Mehi: " . $maleCount . "<br>";
echo "Naisi: " . $femaleCount . "<br>";
echo "Meeste keskmine palk: " . $mavg . "<br>";
echo "Naiste keskmine palk: " . $navg . "<br>";
echo "Kokkuvõtteks: "

?>
<!--
Ära vaata seda almumist osa, see on lihtsalt koodi ilustamiseks
-->
<span style='color: #ff0019'>~</span><span style='color: #f9001d'> </span><span style='color: #f40022'>S</span><span style='color: #ef0026'> </span><span style='color: #ea002b'>o</span><span style='color: #e50030'> </span><span style='color: #e00034'>o</span><span style='color: #db0039'> </span><span style='color: #d6003d'>l</span><span style='color: #d10042'> </span><span style='color: #cc0047'>i</span><span style='color: #c6004b'> </span><span style='color: #c10050'>n</span><span style='color: #bc0054'> </span><span style='color: #b70059'>e</span><span style='color: #b2005e'> </span><span style='color: #ad0062'> </span><span style='color: #a80067'>D</span><span style='color: #a3006b'> </span><span style='color: #9e0070'>i</span><span style='color: #990075'> </span><span style='color: #930079'>s</span><span style='color: #8e007e'> </span><span style='color: #890082'>k</span><span style='color: #840087'> </span><span style='color: #7f008c'>r</span><span style='color: #7a0090'> </span><span style='color: #750095'>i</span><span style='color: #700099'> </span><span style='color: #6b009e'>m</span><span style='color: #6600a3'> </span><span style='color: #6000a7'>i</span><span style='color: #5b00ac'> </span><span style='color: #5600b0'>n</span><span style='color: #5100b5'> </span><span style='color: #4c00ba'>a</span><span style='color: #4700be'> </span><span style='color: #4200c3'>t</span><span style='color: #3d00c7'> </span><span style='color: #3800cc'>s</span><span style='color: #3300d1'> </span><span style='color: #2d00d5'>i</span><span style='color: #2800da'> </span><span style='color: #2300de'>o</span><span style='color: #1e00e3'> </span><span style='color: #1900e8'>o</span><span style='color: #1400ec'> </span><span style='color: #0f00f1'>n</span><span style='color: #0a00f5'> </span><span style='color: #0500fa'>~</span>
</div>
</body>
</html>