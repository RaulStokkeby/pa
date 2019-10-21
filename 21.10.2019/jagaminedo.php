<?php


$esimene = $_GET['number1'];
$teine = $_GET['number2'];


function jaga($esimene, $teine){
    if ($teine == 0) {
        return 'Nulliga ei saa jagada';
    } else {
        return ($esimene. ' jagatud ' .$teine. ' on ' .($esimene / $teine));
    }
}

echo jaga($esimene, $teine);


echo '<hr><br>';
echo '<a href="jagamine.php">Sisesta andmed uuesti</a>';