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
// Arko Avarsalu, Ül x, ..24
echo "<h1>Ma ei tea miks see vahepeal ei tööta aga naudi mu kassist pilte</h1>";
error_reporting(0);
$kataloog = 'pildid/';
$asukoht = opendir($kataloog);
$pildid = array();
while ($fail = readdir($asukoht)){
    if ($fail != '.' && $fail != '..'){
        array_push($pildid, $fail);
    }
}
for ($i = 1; $i <= 3; $i++) {
    $rand = rand(0, 5);
    echo "<div class='col-md-4'>
    <a href='pildid/".$pildid[$rand]."'>
    <img src='pildid/".$pildid[$rand]."' class='img-fluid'/>
    </div>";
}


?>
</div>
</body>
</html>