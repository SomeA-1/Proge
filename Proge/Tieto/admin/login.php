<?php include('config.php');
	session_start();
	if (isset($_SESSION['tuvastamine'])) {
	  header('Location: admin.php');
	  exit();
	  }
	  //kontrollime kas väljad on täidetud
	if (!empty($_POST['login']) && !empty($_POST['pass'])) {
		//eemaldame kasutaja sisestusest kahtlase pahna
		$login = htmlspecialchars(trim($_POST['login']));
		$pass = htmlspecialchars(trim($_POST['pass']));

		$sool = 'taiestisuvalinetekst';
		$kryp = crypt($pass, $sool);
		//kontrollime kas andmebaasis on selline kasutaja ja parool
		$paring = "SELECT * FROM kasutajad WHERE kasutaja='$login' AND parool='$kryp'";
		$valjund = mysqli_query($yhendus, $paring);
		//kui on, siis loome sessiooni ja suuname
		if (mysqli_num_rows($valjund)==1) {
			$_SESSION['tuvastamine'] = 'misiganes';
			header('Location: admin.php');
		} else {
			echo "kasutaja või parool on vale";
		}
	}
?>
<h1>Login</h1>
<form action="" method="post">
	Login: <input type="text" name="login"><br>
	Password: <input type="password" name="pass"><br>
	<input type="submit" value="Logi sisse">
</form>
