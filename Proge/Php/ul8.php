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
// Arko Avarsalu, Ül 8, 14.2.24
error_reporting(0);
date_default_timezone_set('Europe/Tallinn');
echo "Täna: ".date("d.m.Y H:i");
echo ", kooliaasta lõpuni on jäänud: <b>".(strtotime("2024-06-30") - strtotime("now"))/60/60/24 ."  päeva!!!!!!!!!!!!!!!!!!!!!!!!!!</b>";
echo "<form action='#' method='get'> 
            Sisesta sünnikuupäev (d.m.y): <br>
            <input type='text' name='skp'/><br>
            <input type='submit' value='Submit'/><br></form>";
$skp = $_GET['skp'];
$skp = strtotime($skp);
if (isset($skp)) {
    echo "Teie vanus on: ".date("Y") - date("Y", $skp);
    echo "<br><br>";
}
// Dropdown menu with 4 options
echo "<form action='#' method='get'> 
            <select name='dropdown'>
                <option value='1'>Kevad</option>
                <option value='2'>Suvi</option>
                <option value='3'>Sügis</option>
                <option value='4'>Talv</option>
            </select>
            <input type='submit' value='Submit'/><br></form>";
$dropdown = $_GET['dropdown'];
switch ($dropdown) {
    case 1:
        echo "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/Fr%C3%BChling_bl%C3%BChender_Kirschenbaum.jpg/640px-Fr%C3%BChling_bl%C3%BChender_Kirschenbaum.jpg'>";
        break;
    case 2:
        echo "<img src='https://www.taskutark.ee/wp-content/uploads/2015/01/73.jpg'>";
        break;
    case 3:
        echo "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Mt-St-Greg-RueEcureuils-3.jpg/800px-Mt-St-Greg-RueEcureuils-3.jpg'>";
        break;
    case 4:
        echo "<img src='https://ksd-images.lt/display/krauta_ee/uploads/ca/332/afe1d44e.jpg'>";
        break;
}
?>
</div>
</body>
</html>