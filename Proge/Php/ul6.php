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
// Arko Avarsalu, Ül 6, 7.2.24
//Arvud 1-100
for ($i = 1; $i <= 100; $i++) {
    echo $i.". ";
    if ($i % 10 == 0) {
        echo "<br>";
    }
}
echo "<br><br>";
//Horisontaalne joon
for ($i = 1; $i <= 100; $i++) {
    echo "*";
}
echo "<br><br>";
//Vertikaalne joon
for ($i = 1; $i <= 5; $i++) {
    echo "*"."<br>";
}
echo "<br><br>";
//Ruut
echo "<form action='#' method='get'> Ruudu Suurus <input type='text' name='ruut'> <input type='submit' value='Tee ruutu'></form><br>";
$ruut = $_GET['ruut'];
if(!empty($_GET["ruut"])) {
    for ($i = 1; $i <= $ruut; $i++) {
        for ($j = 1; $j <= $ruut; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}
echo "<br><br>";
//Paarisarvud 10-0
for ($i = 10; $i >= 0; $i--) {
    if ($i % 2 == 0) {
        echo $i." ";
    }
}
echo "<br><br>";
//Kolmega jagunevad arvud
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo $i." ";
    }
}
echo "<br><br>";
//Nimede paarid
$pois = array("Rolando Andrews","Adam Obrien","Pedro Griffith","Stanley Bass","Caleb Hawkins","Terry Nguyen","Trevor Massey","Jody Parker","Ben Hale","Joseph Reed");
$tud = array("Ginger Parks", "Chelsea Erickson", "Mabel Figueroa", "Naomi Kennedy", "Hilda Walker", "Ida Patterson", "Melissa Hubbard", "Cathy Mann", "Melody Kelly", "Cindy Carlson");
for ($i = 0; $i < count($pois); $i++) {
    echo $pois[$i]." ja ".$tud[$i]."<br>";
}
?>
</div>
</body>
</html>