<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="ul4.css">
    <title>Ülesanne 4</title>
<!-- Arko Avarsalu, 5.2.24 -->
</head>
<body>
    <div class="container">
    <h1>Klakuklaator</h1>
    <form action="ul4.php" method="get">
        Jagatav <input type="text" name="a" required><br>
        Jagaja <input type="text" name="b" required><br>
        <input type="submit" value="Saada">
    </form>
    
    <?php
    error_reporting(0);
	//lisab vormist saadud andmed muutujasse
	$a = $_GET['a'];
    $b = $_GET['b'];
    if($b == 0){
        echo 'Nulliga ei saa jagada';
    } else {
        $jagatis = $a / $b;
        echo 'Jagatis on: '.$jagatis.'<br>';
    }
    ?>


    <h1>Vanused</h1>
    <form action="ul4.php" method="get">
        Teie esimene vanus <input type="text" name="c" required><br>
        teine vanus<input type="text" name="d" required><br>
        <input type="submit" value="Saada">
    </form>
    <?php
    //lisab vormist saadud andmed muutujasse
    $c = $_GET['c'];
    $d = $_GET['d'];
    if($c > $d){
        echo 'Esimene inimene on vanem';
    } else if($c < $d){
        echo 'Teine inimene on vanem';
    } else {
        echo 'Inimesed on sama vanad';
    } 
    ?>


    <h1>Ruut v riistaga küülik</h1>
    <form action="ul4.php" method="get">
        Esimene arv <input type="text" name="e" required><br>
        Teine arv <input type="text" name="f" required><br>
        <input type="submit" value="Saada">
    </form>
    <?php
    //lisab vormist saadud andmed muutujasse
    $e = $_GET['e'];
    $f = $_GET['f'];
    if($e == $f){
        echo 'Ruut';
    } else {
        echo 'Ristkülik';
    }
    ?>


    <h1>Juubeli kontroll</h1>
    <form action="ul4.php" method="get">
        Teie sünniaasta <input type="text" name="g" required><br>
        <input type="submit" value="Saada">
    </form>
    <?php
    //lisab vormist saadud andmed muutujasse
    $g = $_GET['g'];
    $vanus = 2023 - $g;
    if($g % 5 == 0){
        echo 'Juubel';
    } else {
        echo 'Ei ole juubel';
    }
    ?>


    <h1>Kontrolltöö hinne</h1>
    <form action="ul4.php" method="get">
        Teie punktid <input type="text" name="h" required><br>
        <input type="submit" value="Saada">
    </form>
    <?php
    //lisab vormist saadud andmed muutujasse
    $h = $_GET['h'];
    if($h < 5){
        echo 'Lollakas';
    } else if($h < 9){
        echo 'Tublo';
    } else if($h == 10){
        echo 'Perfektne';
    } else {
        echo 'Vale sisend';
    }
?>
</div>
</body>
</html>