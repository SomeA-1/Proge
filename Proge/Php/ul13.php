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
//AINULT JPG and JPEG image uploader with image viewer
error_reporting(0);
echo "<br><form action='#' method='post' enctype='multipart/form-data'> Vali pilt <input type='file' name='fileToUpload' id='fileToUpload'> <input type='submit' value='Lae pilt üles' name='submit'></form><br>";
$errorcase = "";
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Fail on pilt - " . $check["mime"] . ". ";
        $uploadOk = 1;
    } else {
        echo "Fail pole pilt.";
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
    $errorcase = "exists";
    $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 500000) {
    $errorcase = "size";
    $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "jpeg") {
    $errorcase = "!jpeg";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "<br>Vabandust, pilti ei laetud üles,";
    match ($errorcase) {
        "exists" => " kuna selline pilt on juba olemas.",
        "size" =>  " kuna pilt on liiga suur.",
        "!jpeg" => " kuna pilt pole JPG ega JPEG.",
        default => " kuna tekkis tundmatu viga."
    };
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Pilt ". basename( $_FILES["fileToUpload"]["name"]). " on üles laetud.";
    } else {
        echo "<br>Vabandust, pilti ei laetud üles ¯\_(ツ)_/¯.";
    }
}
//Kood mis kuvab pildid ja laseb klikates suurendada
$files = scandir('uploads/');
foreach($files as $file) {
    if ($file != "." && $file != "..") {
        echo "<br><a href='uploads/".$file."' target='_blank'><img src='uploads/".$file."' width='100' height='100'></a>";
    }
}

?>
</div>
</body>
</html>