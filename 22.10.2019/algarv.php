<?php

function algarv($number) {
    if ($number < 2) {
        echo  $number.' - antud arv ei kuulu valitud vahemiku sisse <br>';
    } else {
        $divider = 2;
        while ($number % $divider != 0) {
            $divider++;
        }
        if ($number == $divider) {
            $result =  True;
        } else {
            $result =  False;
        }
    }
    return $result;
}

function tagastus($result) {
    if ($result == True) {
        echo 'on algarv';
    } else {
        echo 'ei ole algarv';
    }

}

tagastus(algarv(rand(0,1000)));
