<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content = "text/html;charset=utf-8"/>
        <meta name = "Description" content = "Strona stanowiąca źródło wiedzy o osiągnięciach człowieka w eksploracji przestrzeni kosmicznej"/>
        <meta name = "Keywords" content = "kosmos eksploracja podbój rakiety"/>
        <title>Podbój kosmosu</title>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <div class="naglowek">Podbój kosmosu</div>
        <div class="menu">
            <ul>
                <li><a href="index.html">Strona główna</a></li>
                <li><a href="wostok1.html">Wostok 1</a></li>
                <li><a href="apollo11.html">Apollo 11</a></li>
            </ul>
        </div>
        <div class="tresc">
            <div class="lewa">
                <h1>Strona główna</h1>
                <p>
                    <span class="wazne">4 października 1957</span> roku Związek Radziecki umieścił na orbicie okołoziemskiej pierwszego sztucznego satelitę. Od tego czasu wysłano w kosmos psa, 
                    człowiek postawił stopę na Księżycu a powierzchnię Marsa badają bezzałogowe łaziki. Poniżej znajdują się odnośniki do artykułów o kamieniach milowych w podboju
                    kosmosu: </p>
                    
                <p><a href="wostok1.html">[1961] Wostok 1 - pierwszy lot człowieka w kosmos</a></p>
                <p><a href="apollo11.html">[1969] Apollo 11 - pierwsze lądowanie człowieka na księżycu</a></p>
                <h2>Zapisz się do klubu miłośników astronomii</h2>
                <form action="zapisz.php" method="get">
                    Imię: <input type="text" name="imie"/> <br/>
                    Adres e-mail: <input type="text" name="mail"/> <br/>
                    Rok urodzenia: <select name="rok">
                    <?php 
                    include "data.php";
                    ?>
                    </select><br/>
                    Poziom wiedzy:<br/>
                    <input type="radio" name="zaawansowanie" value="poczatkujacy" checked="true"/>Początkujący<br/>
                    <input type="radio" name="zaawansowanie" value="sredni"/>Średniozaawansowany<br/>
                    <input type="radio" name="zaawansowanie" value="zaawansowany"/>Zaawansowany<br/>
                    <input type="radio" name="zaawansowanie" value="expert"/>Ekspert naukowy<br/>
                    <input type="submit" value="Zapisz się"/>
                </form>
                 <h2>Pozostałe odnośniki:</h2>
                 <p><a href="https://www.tutorialspoint.com/fundamentals_of_science_and_technology/space_exploration_timeline.html">Linia czasu eksploracji kosmosu</a></p>
            </div>
            <div class="prawa"><img src="sputnik.png" width="100%"></div>
        </div>
                
        <div class="stopka">Podbój kosmosu, 2022</div>
    </body>
</html>