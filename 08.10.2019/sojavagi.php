<?php

?>

<form action="sojavagi_do.php" method="get">
    <div id="input-group">
        <label for="nation">kodakondsus</label>
        <select id="nation" name="nation">
            <option value="et">eestlane</option>
            <option value="ru">venealne</option>
            <option value="fi">soomlane</option>
            <option value="se">rootslane</option>
        </select>
    </div>
    <div id="input-group">
        <label for="age">vanus</label>
        <input type="text" id="age" name="age">
    </div>
    <div id="input-group">
        <label for="edu-begin">algharidus</label>
        <input type="radio" id="edu-begin" name="edu" value="begin">
        <label for="edu-basic">põhikool</label>
        <input type="radio" id="edu-basic" name="edu" value="basic">
        <label for="edu-medium">keskkool</label>
        <input type="radio" id="edu-medium" name="edu" value="medium">
        <label for="edu-grand">kõrgkool</label>
        <input type="radio" id="edu-grand" name="edu" value="grand">
     <div>
            <div id="input-group">
                <input type="submit" class="button" value="kontrolli">
            </div>
 <form>