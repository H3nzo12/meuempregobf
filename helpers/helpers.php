<?php


    #função die and debug
    //servirá para debugar o nosso código
function dd($param = [], $param2 = true) {
   
    echo "<pre>";
    print_r($param);
    echo "</pre>";

    if ($param2) {
        exit;
    }

}

?>
