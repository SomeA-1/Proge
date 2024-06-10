<?php
include('config.php');

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $paring = 'SELECT * FROM arvustused INNER JOIN asukohad ON asukohad.id = arvustused.asukoha_id WHERE asukoha_id='.$id.'';
    $valjund = $yhendus->query($paring);
    while($rida = mysqli_fetch_array($valjund)){
        echo 'Kohvik: '.$rida['kohanimi'].', '.$rida['asukoht'].'<br>';
        echo 'Nimi: '.$rida['nimi'].'<br>';
        echo $rida['hinnang'], str_repeat(" ★", $rida['hinnang']).'<br>';
        echo 'Kommentaar: '.$rida['kommentaar'].'<br>';
        echo '<a href="remove.php?arvid='.$rida['arvustuse_id'].'">Kustuta</a><br>';
        echo str_repeat('-', 50).'<br>';
      }
} elseif (isset($_GET['id']) && $valjund->num_rows < 1){
    echo '<h1>Arvustusi pole!</h1>';
} else {
    $paring = 'SELECT * FROM arvustused INNER JOIN asukohad ON asukohad.id = arvustused.asukoha_id ORDER BY asukoha_id ASC';
    $valjund3 = $yhendus->query($paring);
    while($rida = mysqli_fetch_array($valjund3)){
        echo 'Kohvik: '.$rida['kohanimi'].', '.$rida['asukoht'].'<br>';
        echo 'Nimi: '.$rida['nimi'].'<br>';
        echo $rida['hinnang'], str_repeat(" ★", $rida['hinnang']).'<br>';
        echo 'Kommentaar: '.$rida['kommentaar'].'<br>';
        echo '<a href="remove.php?arvid='.$rida['arvustuse_id'].'">Kustuta</a><br>';
        echo str_repeat('-', 50).'<br>';
      }
}

if(isset($_GET['arvid'])){
  $aid = $_GET['arvid'];
  $kustuta = 'DELETE FROM arvustused WHERE arvustuse_id='.$aid.'';
  if($yhendus->query($kustuta) === TRUE){
    echo "Arvustus on edukalt kustutatud!";
  } else {
    echo "Viga: " . $kustuta . "<br>" . $yhendus->error;
  }
}


?>