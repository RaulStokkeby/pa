<?php

$esimene = $_GET['number1'];
$teine = $_GET['number2'];

if (strlen($esimene) == 0 or strlen($teine) == 0 ) {
    echo 'Palun sisesta mõlevad väärtused';
}
else if ( $esimene > $teine) {
    echo 'Esimene nr (' .$esimene. ') on suurem kui teine nr (' .$teine. ')';
}
else if ($esimene < $teine) {
    echo 'Esimene nr (' .$esimene. ') on väiksem kui teine nr (' .$teine. ')';
} else {
    echo 'Numbrid on võrdsed';
}


echo '<hr><br>';
echo '<a href="suurem_vaiksem.php">Sisesta andmed uuesti</a>';