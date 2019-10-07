<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$celisius = 5;
$fahrenheit = (9 / 5) * $celisius + 32;

// var_dump($fahrenheit); kontrollin kas on float

printf('Celsius: %d&deg;C - Fahrenheit: %.2f&deg;F',$celisius, $fahrenheit)

?>
</body>
</html>
