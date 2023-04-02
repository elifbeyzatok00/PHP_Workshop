<?php

    # Built-in Fonksiyonlar

    # Kullanıcı Tanımlı Fonksiyonlar

    function selamlama() {
        for($i=0;$i<10;$i++) {
            echo 'Merhaba'.'<br>';
        }
    }
    
    selamlama();

    function topla() {
        $a = 10;
        $b = 20;
        echo $a + $b;
    }

    topla();
    



?>