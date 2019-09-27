<?php

$raadius = $_GET['raadius'];
$pindala = $raadius * $raadius * 3.14;
$umbermoot = $raadius * 2 * 3.14;

echo 'Sisestatud raadius on: ' .$raadius. '<br><br>';
echo 'Ringi pindala on: ' .$pindala. '<br><br>';
echo 'Ringi ümbermõõt on: ' .$umbermoot. '<br><br>';
echo '<hr><br>';
echo '<a href="raadius_input.php">Sisesta andmed uuesti</a>';