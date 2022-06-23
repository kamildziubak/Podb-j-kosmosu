<?php
    echo '<table border="1">';    
    echo '<tr><th>Imię</th><th>Adres e-mail</th><th>Rok urodzenia</th><th>Stopień wiedzy</th></tr>';

    set_error_handler(function(){die();});

    $string = file_get_contents("czlonkowie.json");
    
    $array = json_decode($string, true);
    $allowed=array();

    foreach($_REQUEST as $poziom){
        array_push($allowed, $poziom);
    }

    foreach($array as $czlonek)
    {
        if(in_array($czlonek['zaawansowanie'], $allowed, false))
        {
            echo "<tr>";
            echo "<td> {$czlonek['imie']}</td>";
            echo "<td> {$czlonek['mail']}</td>";
            echo "<td> {$czlonek['rok']}</td>";
            echo "<td> {$czlonek['zaawansowanie']}</td>";
            echo "</tr>";
        }
    }

    echo "</table>";
?>