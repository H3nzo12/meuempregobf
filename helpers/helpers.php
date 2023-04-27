<?php

function formatatexto($txt) {

    //do mesmo modo que definido
    echo $txt;
    echo "<br>";
    //td minusculo
    echo strtolower($txt);
    echo "<br>";
    //td maiuscula
    echo strtoupper($txt);
    echo "<br>";
    //apenas primeira em maiuscula
    echo ucfirst(strtolower($txt));
}

?>
