<h1>PALJU LAHEDAM admini leht kui TAVAKASUTAJATEL!</h1>
<?php include('config.php'); ?>
<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kohvikud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
    <?php
include('config.php');
$paring = 'SELECT * FROM asukohad';	
$valjund = $yhendus->query($paring);
$total = 0;
$sum = 0;
$average = 0;
echo "<div class='container'>";
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Kohviku nimi </th>
<th>Kohviku asukoht </th>
<th>Keskmine hinnang </th>
<th>Hinnanguid kokku </th>
</tr>";
//kohvikud ja hinnangud
while($row = mysqli_fetch_array($valjund))
  {
    $id = $row[0];
    $keskmine = 'SELECT AVG(hinnang) as keskmine FROM arvustused where asukoha_id='.$id.'';
    $total = 'SELECT COUNT(hinnang) as hinnangud FROM arvustused where asukoha_id='.$id.'';
    $valjund2 = $yhendus->query($total);
    $valjund3 = $yhendus->query($keskmine);
    while($row2 = mysqli_fetch_array($valjund2)){
    $sum = $row2['hinnangud'];
    }
    while($row3 = mysqli_fetch_array($valjund3)){
    $kesk = round($row3['keskmine'], 2);
    }
  echo "<tr>";
  echo "<td>" . $row[0] . "</td>";
  echo "<td>" . $row[1] . "</td>";
  echo "<td>" . $row[2] . "</td>";
  echo "<td>" . $kesk. "</td>";
    echo "<td>" . $sum . "</td>";
  echo "<td><a href='remove.php?id=".$row[0]."'>Eemalda hinnanguid</a></td>";
  echo "</tr>";
  }
echo "</table>";

?>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


?>
