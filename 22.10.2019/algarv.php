<?php

function algarv($number) {
    if ($number < 2) {
        $result =  $number.' - antud arv ei kuulu valitud vahemiku sisse <br>';
    } else {
        $divider = 2;
        while ($number % $divider != 0) {
            $divider++;
        }
        if ($number == $divider) {
            $result =  $number . ' on algarv<br>';
        } else {
            $result =  $number . ' ei ole algarv<br>';
        }
    }
    return $result;
}

algarv(rand(0,1000));