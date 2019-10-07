<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th ,td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            text-align: center;
            padding: 0.25rem;
        }
        thead {
            background: orange;
        }
    </style>
</head>
<body>
<?php

$x = 8;
$y = 2;

// aritmeetilised operatsioonid
$summa = $x + $y;
$vahe = $x - $y;
$korrutus = $x * $y;
$jagamine = $x / $y;
$jaak = $x % $y;

//väljastus
echo' 
    <table>
        <thead>
            <tr>
                <th>Operaator</th>
                <th>Nimetus</th>
                <th>Näide</th>
                <th>Tulemus</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>x + y</th>
                <th>liitmine</th>
                <th>'.$x.' + '.$y.'</th>
                <th>'.$summa.'</th>
            </tr>
            <tr>
                <th>x - y</th>
                <th>lahutamine</th>
                <th>'.$x.' - '.$y.'</th>
                <th>'.$vahe.'</th>
            </tr>
            <tr>
                <th>x * y</th>
                <th>Korrutamine</th>
                <th>'.$x.' * '.$y.'</th>
                <th>'.$korrutus.'</th>
            </tr>
            <tr>
                <th>x / y</th>
                <th>Jagamine</th>
                <th>'.$x.' / '.$y.'</th>
                <th>'.$jagamine.'</th>
            </tr>
            <tr>
                <th>x % y</th>
                <th>Jääk</th>
                <th>'.$x.' % '.$y.'<br>5 % 2</th>
                <th>'.$jaak.' <br>'.(5 % 2).'</th>
            </tr>
        </tbody>
    </table>
     ';

?>
</body>
</html>
