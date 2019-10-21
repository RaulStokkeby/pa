<?php


$esimene = $_GET['number1'];
$teine = $_GET['number2'];


function kolmnurk($esimene, $teine){
        return sqrt(($esimene * $esimene) + ($teine * $teine));
}

echo round(kolmnurk($esimene, $teine));


echo '<hr><br>';
echo '<a href="kolmnurk.php">Sisesta andmed uuesti</a>';