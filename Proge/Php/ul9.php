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
// Arko Avarsalu, Ül 9, 14.2.24
error_reporting(0);
echo "<form action='#' method='get'> 
            Nimi:<br>
            <input type='text' name='name'/><br>
            <input type='submit' value='Submit'/><br></form>";
$name = $_GET['name'];
if (isset($name)) {
    echo "Tere, ".ucfirst($name."!");
    echo "<br><br>";
    for($i = 0; $i < 5; $i++) {
        echo strtoupper($name[$i]).".";
    }
}
//Censorship
echo "<br>Ära ütle sõnu nagu mario, muidu saad bänni!";
echo "<form action='#' method='get'>
            Sisesta tekst:<br>
            <input type='text' name='text'/><br>
            <input type='submit' value='Submit'/><br></form>";
$text = $_GET['text'];
if (isset($text)) {
    $censored = str_replace("mario", "*****", $text);
    echo $censored;
    echo "<br><br>";
}
// email ja õüöä replacement
echo "<form action='#' method='get'>
            Sisesta täisnimi:<br>
            <input type='text' name='email'/><br>
            <input type='submit' value='Submit'/><br></form>";
$email = $_GET['email'];
if (isset($email)) {
    $email = str_replace("õ", "o", $email);
    $email = str_replace("ä", "a", $email);
    $email = str_replace("ö", "o", $email);
    $email = str_replace("ü", "u", $email);
    $email = explode(" ", $email);
    echo $email[0].".".$email[1]."@hkhk.ee";
}
echo "<br><br>";
//Isikukood
function isikukood(){
    echo "<form action='#' method='get'> 
    Sisesta isikukood: <br>
    <input type='number' name='isikukood'/><br>
    <input type='submit' value='Submit'/><br> </form>";
$isikukood = $_GET['isikukood'];
if (isset($isikukood)) {
    if (strlen($isikukood) == 11) {
        echo "Isikukood on õige pikkusega";
        echo "<br>";
        $sugu = substr($isikukood, 0, 1);
        if ($sugu % 2 == 0) {
            echo "Sugu: Naine";
        } else {
            echo "Sugu: Mees";
        }
        echo "<br>";
        $paev = substr($isikukood, 5, 2);
        $kuu = substr($isikukood, 3, 2);
        $aasta = substr($isikukood, 1, 2);
        if ($sugu % 2 == 0) {
            echo "Sündinud: " . $paev . "." . $kuu . ".20" . $aasta;
        } else {
            echo "Sündinud: " . $paev . "." . $kuu . ".19" . $aasta;
        }
    } else {
        echo "Isikukood on vale pikkusega";
    }
}
}
echo isikukood();
//Head mõtted
$alus = array('Ta', 'Kale', 'Mario', 'Malle');
$oeldis = array('jookseb', 'viskab', 'hüppab', 'kõnnib');
$sihitis = array('ära', 'maha', 'üles', 'alla');
echo "<br>".$alus[random_int(0, count($alus)-1)]," ". $oeldis[random_int(0, count($oeldis)-1)]," ". $sihitis[random_int(0, count($sihitis) - 1)];

?>
</div>
</body>
</html>