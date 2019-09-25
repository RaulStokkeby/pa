<?php
$nimi = $_GET['nimi'];
$pikkus = $_GET['pikkus'];
$kaal = $_GET['kaal'];
$kmi = $kaal / ($pikkus * $pikkus);

echo 'Nimi: ' .$nimi. '<br>';
echo 'Pikkus: ' .$pikkus. '<br>';
echo 'Kaal: ' .$kaal. '<br>';
echo 'Kehamassiindeks: ' .$kmi. '<br>';
echo '<hr>';
echo '<a href="input.php">sisesta andmed uuesti</a>';