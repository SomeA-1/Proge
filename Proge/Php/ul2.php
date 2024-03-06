<?php
// Arko Avarsalu, Ül 2, 5.2.24
$i = 5;
$j = 24;
$h = 15;
$a = $i / $j;
$b = $i * $j;
$c = $i - $j;
$d = $i + $j;

printf("%0.1f / %0.1f = %0.1f <br>", $i, $j, $a );
printf("%0.1f * %0.1f = %0.1f  <br>", $i, $j, $b);
printf("%0.1f + %0.1f =  %0.1f <br>", $i, $j, $d);
printf("%0.1f - %0.1f =  %0.1f <br>", $i, $j, $c);

printf("%0.2f mm on %0.2f cm ja %0.3f m <br>", $i, $i/10, $i/1000);

printf("%0.2f, %0.2f, %0.2f mõõtudega kolmnurga ümbermööt on %d ja pindala on %d <br>", $i, $j, $h, $i+$j+$h, $i*$h/2);
?>