<?php

// defineerin muutujad ja omistan muutujale raadius kasutaja poolt antud sisendi

$raadius = $_GET['raadius'];

// arvutan antud raadiusega ringi pindala ning ümbermõõdu

$pindala = $raadius * $raadius * pi();
$umbermoot = $raadius * 2 * pi();

// muutujate andmetüüpide ja väärtuste kontroll

    /* var_dump($pindala);
       var_dump($umbermoot); */

//  väljastan sisestatud raadiuse väärtuse ning selle raadiusega ringi pindala ja ümbermõõdu

echo 'Sisestatud raadius on: ' .$raadius. '<br><br>';
echo 'Ringi pindala on: ' .round($pindala, 3). '<br><br>';
echo 'Ringi ümbermõõt on: ' .round($umbermoot, 3). '<br><br>';

echo 'Ringi pindala on (lühem kood): ' .round(($raadius * $raadius * pi()), 3). '<br><br>';
echo 'Ringi ümbermõõt on (lühem kood): ' .round(($raadius * 2 * pi()), 3). '<br><br>';

// panen joone vahele ja annan võimaluse protsessi korrata

echo '<hr><br>';
echo '<a href="raadius_input.php">Sisesta andmed uuesti</a>';