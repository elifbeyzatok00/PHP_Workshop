<?php

#parametre olarak dizi göndermek    
$liste = array(10, 20, 30);
    function toplam($sayilar){
        $toplam = 0;
        foreach ($sayilar as $sayi) {
            $toplam += $sayi;
        }
        return $toplam;
    }

    echo toplam($liste);

    echo "<br><br>";

    #parametre olarak ... göndererek sonsuz değişken atanabileceğini söylemek 
    function toplam2(...$sayilar){
        $toplam2 = 0;
        foreach ($sayilar as $sayi) {
            $toplam2 += $sayi;
        }
        return $toplam2;
    }

    echo toplam(10, 20, 30);

    echo "<br><br>";

   
    function concatenate($transform, ...$strings){
        $str = '';

        foreach ($strings as $s) {
            $str .= $s;
        }

        return $transform($str);
    }

    //echo concatenate('strtoupper', 'benim', 'adım', 'elif');
    echo concatenate('strtolower', 'Benim', 'Adım', 'elif');






?>