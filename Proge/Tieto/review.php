<!DOCTYPE html>
<html>
<head>
    <meta charset= "UTF-8">
    <link rel="stylesheet" type="text/css" href="review.css">
    <title>Review</title>
</head>
<body></body>
<?php
include('config.php');
if (isset($_GET['id'])){
  $id = $_GET['id'];
} else {
 # header('Location: hinnangud.php');
}

?>

<h1>Tere tulemast hinnangu andmise lehele!</h1>
<h2>
<?php
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $paring = 'SELECT * FROM asukohad where id='.$id.'';	
  $valjund = $yhendus->query($paring);
  while($rida = mysqli_fetch_array($valjund)){
    echo $rida['kohanimi'].', '.$rida['asukoht'].'<br>';
  } 
  ?>
  </h2>
  <form action="review.php" method="GET">
  <br>
  <input type="text" hidden  name="id" value="<?php echo $_GET['id']; ?>" >
  <br>
  <input type="text" name="nimi" placeholder="Nimi">
  <br>
  <textarea name="kommentaar" rows="4" cols="50" placeholder="Kirjuta arvustus"></textarea>
  <br>
  <div class="rate">
          <input type="radio" id="star1" name="rate" value="1" /><label for="star1" title="text">1 star</label>
          <input type="radio" id="star2" name="rate" value="2" /><label for="star2" title="text">2 stars</label>
          <input type="radio" id="star3" name="rate" value="3" /><label for="star3" title="text">3 stars</label>
          <input type="radio" id="star4" name="rate" value="4" /><label for="star4" title="text">4 stars</label>
          <input type="radio" id="star5" name="rate" value="5" /><label for="star5" title="text">5 stars</label>
          <input type="radio" id="star6" name="rate" value="6" /><label for="star6" title="text">6 stars</label>
          <input type="radio" id="star7" name="rate" value="7" /><label for="star7" title="text">7 stars</label>
          <input type="radio" id="star8" name="rate" value="8" /><label for="star8" title="text">8 stars</label>
          <input type="radio" id="star9" name="rate" value="9" /><label for="star9" title="text">9 stars</label>
          <input type="radio" id="star10" name="rate" value="10" /><label for="star10" title="text">10 stars</label>
      </div>
      <br><br><br>
  <input type="submit" ></a>
  </form>
  <?php
  if (!empty($_GET["nimi"]) && !empty($_GET["kommentaar"]) && !empty($_GET["rate"])) {
    $nimi = $_GET["nimi"];
    $kommentaar = $_GET["kommentaar"];
    $rate = $_GET["rate"];
    $id = $_GET["id"];
    echo $rate;
    $paring3 = "INSERT INTO `arvustused` (`asukoha_id`, `nimi`, `hinnang`, `kommentaar`) VALUES ('$id', '$nimi', '$rate', '$kommentaar')";
    $valjund3 = mysqli_query($yhendus, $paring3);
    
    #header('Location: review.php?id=' . $id);
}
  
?>
<h2>Teised Arvustused</h2>
<?php
$keskmine = 'SELECT AVG(hinnang) as keskmine FROM arvustused where asukoha_id='.$id.'';
$valjund3 = $yhendus->query($keskmine);
while($rida = mysqli_fetch_array($valjund3)){
  echo 'Keskmine hinnang: '.round($rida['keskmine'], 2);
}
echo '<br>';
echo '<br>';
$paring2 = 'SELECT * FROM arvustused where asukoha_id='.$id.'';
$valjund2 = $yhendus->query($paring2);
while($rida = mysqli_fetch_array($valjund2)){
  echo 'Nimi: '.$rida['nimi'].'<br>';
  echo $rida['hinnang'], str_repeat(" ★", $rida['hinnang']).'<br>';
  echo 'Kommentaar: '.$rida['kommentaar'].'<br>';
  echo '<br>';
}
} else {
  echo 'Viga!';
}

?>



