<?php
include('config.php'); //andmebaasi paroolid ja ühendus on teises failis
$paring = 'SELECT * FROM muusika';
$valjund = mysqli_query($yhendus, $paring);
while($rida = mysqli_fetch_array($valjund)){
	echo '<strong>Artist: '.$rida[1].' - '.$rida[2].'</strong><br>';
	echo 'Album: '.$rida[3].'<br>';
	echo 'Hind: '.$rida[4].'€<br><br>';
}
?>
<table class = "table table-bordered text-center">
    <tr class="bg-dark text-white">
        <th>Artist</th>
        <th>Album</th>
        <th>Aasta</th>
        <th>Hind</th>
    </tr>
    <tr>
        <?php
            while($rida = mysqli_fetch_array($valjund)){
            ?>
                <td> <?php echo $row['artist']; ?> </td>
                <td> <?php echo $row['album']; ?> </td>
                <td> <?php echo $row['aasta']; ?> </td>
                <td> <?php echo $row['hind']; ?> </td>
    </tr>
    <?php
        }
        ?>
</table>
<?php
mysqli_free_result($valjund);
mysqli_close($yhendus);
?>