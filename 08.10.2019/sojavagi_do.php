<?php

$nation = $_GET['nation'];
$age = $_GET['age'];
$edu = $_GET['edu'];

if(strlen($age) > 0) {
    if($nation == 'et' and $age >= 18 and $edu != 'begin') {
        echo 'Sobib sõjaväkke';
    } else {
        echo 'Ei sobi sõjaväkke';
        if ($nation != 'et') {
            echo 'Ainult eestlastel on sõjaväekohustus';
        }
    }

} else {
    echo 'Sisesta kõik andmed';
}

echo '<hr><br>';
echo '<a href="sojavagi.php">Sisesta andmed uuesti</a>';