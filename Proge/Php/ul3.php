<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ulesanne 3</title>
<!-- Arko Avarsalu, 5.2.24 -->
</head>
<body>
    <h1>Klakuklaator OÜ</h1>
    <form action="ul3.php" method="get">
        Trapetsi alus <input type="text" name="a" required><br>
        Trapetsi teine see <input type="text" name="b" required><br>
        Trapetsi kõrgus <input type="text" name="c" required><br>

        Rombi külg <input type="text" name="d" required><br>
        <input type="submit" value="Saada">
    </form>
    
    <?php
	//lisab vormist saadud andmed muutujasse
	$a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    $d = $_GET['d'];
    //arvutab trapetsi pindala
    $trapetsi_pindala = ($a + $b) / 2 * $c;
    echo 'Trapetsi pindala on: '.$trapetsi_pindala.'<br>';
    //arvutab rombi ümbermõõdu
    $rombi_umbermoot = 4 * $d;
    echo 'Rombi ümbermõõt on: '.$rombi_umbermoot.'<br>';
    ?>
</body>
</html>