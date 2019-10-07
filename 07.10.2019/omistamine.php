<?php

$x = 8;
echo' 
    <table>
        <thead>
            <tr>
                <th>Operaator</th>
                <th>lühend</th>
                <th>Näide</th>
                <th>Tulemus</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>x = x + 2</th>
                <th>x += x</th>
                <th>'.$x.' += 2</th>
                <th>'.($x + 2).'</th>
            </tr>
            <tr>
                <th>x = x - 2</th>
                <th>x -= x</th>
                <th>'.$x.' -= 2</th>
                <th>'.($x - 2).'</th>
            </tr>
            <tr>
                <th>x = x * 2</th>
                <th>x *= x</th>
                <th>'.$x.' *= 2</th>
                <th>'.($x * 2).'</th>
            </tr>
            <tr>
                <th>x = x / 2</th>
                <th>x /= x</th>
                <th>'.$x.' /= 2</th>
                <th>'.($x / 2).'</th>
            </tr>
            <tr>
                <th>x = x % 2</th>
                <th>x %= x</th>
                <th>'.$x.' %= 2</th>
                <th>'.($x % 2).'</th>
            </tr>
            <tr>
                <th>x = x . 2</th>
                <th>x .= x</th>
                <th>'.$x.' .= 2</th>
                <th>'.($x . 2).'</th>
            </tr>
        </tbody>
    </table>
     ';
