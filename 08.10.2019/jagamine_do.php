<?php

$esimene = $_GET['number1'];
$teine = $_GET['number2'];

if (strlen($esimene) == 0 or strlen($teine) == 0 ) {
    echo 'Palun sisesta mõlevad väärtused';
}
else if ( $teine < 0  or $teine > 0) {
        $vastus = $esimene / $teine;
        printf('%.2f', $vastus);
} else {
        echo 'Nulliga ei saa jagada';
    }


echo '<hr><br>';
echo '<a href="jagamine.php">Sisesta andmed uuesti</a>';