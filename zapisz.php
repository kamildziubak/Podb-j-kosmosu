<?php
    if(!empty($_REQUEST["imie"])&&!empty($_REQUEST["mail"])&&!empty($_REQUEST["zaawansowanie"])&&!empty($_REQUEST["rok"]))
    {
        $imie = $_REQUEST["imie"];
        $mail = $_REQUEST["mail"];
        if(!str_contains($mail, "@"))
            die("Niepoprawne dane wejściowe!");
        if(!str_contains($mail, "."))
            die("Niepoprawne dane wejściowe!");
        $zaawansowanie = $_REQUEST["zaawansowanie"];
        $rok = $_REQUEST["rok"];
    }
    else die ("Niepełne dane wejściowe!");
    
    $string = file_get_contents("czlonkowie.json");
    if($string)
    {
        $array = json_decode($string, true ) or die ("Błąd w pliku JSON!");
    }
    else
    {
        $array = array();
    }

    array_push($array, array("imie"=> $imie, "mail"=>$mail, "zaawansowanie"=>$zaawansowanie, "rok"=>$rok));

    $string = json_encode($array);

    if(file_put_contents("czlonkowie.json", $string))
    {
        echo "<script type=text/javascript>
            window.alert('Dodano!');
            window.location.replace('index.php');
        </script>";
    }
    else
    {
        die("Wystąpił błąd");
    }
    
?>