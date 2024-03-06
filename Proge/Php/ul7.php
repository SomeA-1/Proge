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
error_reporting(0);
// Arko Avarsalu, Ül 7, 8.2.24
	function tervita(){
		return "Tere päikesekekekekekekene";	
	}
    echo tervita();

    function uudisekiri(){
        echo "<h1>Liitu uudisekirjaga</h1>";
        echo "<form action='#' method='get'> Email: <input type='text' name='email'> <input type='submit' value='Liitu Uudisekirjaga'></form><br>";
        $email = $_GET['email'];
        if (!empty ($_GET['email'])){
            if (str_contains($email, "@") && str_contains($email,".com")){
                echo "Edukalt registreeritud";
            }
        else{
            echo "Sisestage email!";
        }
        }
        echo "<br><br>";
    }
    echo uudisekiri();

    function kasutaja(){
        echo "<form action='#' method='get'> Kasutajanimi: <input type='text' name='knimi'> <input type='submit' value='Registreeru'></form><br>";
        $knimi = $_GET['knimi'];
        $nimilower = strtolower($knimi);
        $kemail = $nimilower."@hkhk.edu.ee";
        echo $kemail;
        $suvalisus = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
        for ($i = 1; $i <= 7; $i++) {
            if (is_array($suvalisus)) {
                $kood .= $suvalisus[random_int(0, count($suvalisus) - 1)];
            }
        }
        echo "<br> Teie OTP: ".$kood;
        echo "<br><br>";
    }
    echo kasutaja();
    
    function arvud(){
        echo "<form action='#' method='get'> Sisesta arvude vahemik (x-y): <input type='text' name='vahemik'><br><form action='#' method='get'> Sisesta arvude samm: <input type='text' name='samm'><br><input type='submit' value='Submit'>
        
        </form><br>";
        $vahemik = $_GET['vahemik'];
        $samm = $_GET['samm'];
        $arvud = explode("-", $vahemik);
        for ($i = $arvud[0]; $i <= $arvud[1]; $i += $samm) {
            echo $i . " ";
        }
        echo "<br><br>";
    }
    echo arvud();
    function ristpindala(){
        $a = isset($_GET['a']) ? $_GET['a'] : 0;
        $b = isset($_GET['b']) ? $_GET['b'] : 0;
        $vastus = $a * $b;
        echo "Vastus: ".$vastus;
    }

    echo "<form action='#' method='get'> 
        Sisesta ristküliku küljed: <br>
        <input type='number' name='a'/><br>
        <input type='number' name='b'/><br>
        <input type='submit' value='Submit'/><br>
    </form>";

    if (isset($_GET['a']) && isset($_GET['b'])){
        $a = $_GET['a'];
        $b = $_GET['b'];
        echo ristpindala();
    }  
    //isikukood
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
    ?>
</div>
</body>
</html>