<?php

    function intro() {
        $parametre = func_num_args();
        if ($parametre == 0) {
            echo "parametre gönderilmemiş.";
        } else {
            $veriler = func_get_args();
            foreach($veriler as $veri) {
                echo $veri.'<br>';
            }
        }
    }
    intro("merhaba","dünya");
    intro("sadık","turan","kocaeli","38");


    // func_num_args() metodu gönderilen parametrelerin sayısını verir.
    // func_get_args() metodu gönderilen parametreleri getirir.

?>