<?php

// defineerin muutujad ja omistan muutujale raadius kasutaja poolt antud sisendi

$raadius = $_GET['raadius'];

// arvutan antud raadiusega ringi pindala ning ümbermõõdu

$pindala = $raadius * $raadius * 3.14;
$umbermoot = $raadius * 2 * 3.14;

//  väljastan sisestatud raadiuse väärtuse ning selle raadiusega ringi pindala ja ümbermõõdu

echo 'Sisestatud raadius on: ' .$raadius. '<br><br>';
echo 'Ringi pindala on: ' .$pindala. '<br><br>';
echo 'Ringi ümbermõõt on: ' .$umbermoot. '<br><br>';

// panen joone vahele ja annan võimaluse protsessi korrata

echo '<hr><br>';
echo '<a href="raadius_input.php">Sisesta andmed uuesti</a>';