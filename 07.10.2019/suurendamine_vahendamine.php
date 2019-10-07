<?php

$x = 10;
echo 'x = ' .$x. '<br><hr>';

$y = $x++; // y väärtus ei suurene, post operaator
$y = ++$x; // y väärtus suureneb, pre operaator

echo 'y = ' .$y. '<br>';
echo 'x = ' .$x. '<br>';