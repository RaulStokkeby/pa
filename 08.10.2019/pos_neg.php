<?php

$arv = 25;
var_dump($arv > 0);

if($arv > 0) {
    echo '<br>' . $arv . ' on positiivne!';
} else if ($arv < 0) {
    echo '<br>' . $arv . ' on negatiivne!';
} else {
    echo '<br>' .$arv. ' on null!';
}


echo '<br>programmi lõpp';
echo '<br><hr>';


$temp = 25;

if ($temp < -20) {
    echo "<br> temperatuur on " .$temp. "&deg;C <body style='background-color: blue'>";
} else if (-20 <= $temp and $temp < 0) {
    echo "<br> temperatuur on " .$temp. "&deg;C <body style='background-color: lightblue'>";
} else if (0 <= $temp and $temp < 10) {
    echo "<br> temperatuur on " .$temp. "&deg;C <body style='background-color: lightgreen'>";
} else if (10 <= $temp and $temp < 20) {
    echo "<br> temperatuur on " .$temp. "&deg;C <body style='background-color: orange'>";
} else {
    echo "<br> temperatuur on " .$temp. "&deg;C <body style='background-color: red'>";
}


