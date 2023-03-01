<?php
    /*
        Veri Tipleri:

        string       : metinsel bilgiler
        int          : tam sayılar
        double       : ondalık sayılar
        boolean      : true/false bilgi
        object       : nesne
        array        : diziler
        null         : değer içermeyen değişken

    */

    $urunAdi = "Iphone12"; # string 
    echo gettype($urunAdi);

    echo "<br>";

    $fiyat = 9000; # integer
    echo gettype($fiyat);

    echo "<br>";

    $kdvOrani = 0.18; # double
    echo gettype($kdvOrani);

    echo "<br>";

    $satistaMi = false; # boolean
    echo gettype($satistaMi);

    echo "<br>";

    $a = (double)10; #int to double
    echo gettype($a);
    # normalde integer ama double yaptık. ezdik

    echo "<br>";

    $b = (int)10.5; # double to int
    echo gettype($b)." ".$b;  //10
    
    echo "<br>";

    $c = (int)"20"; # string to int
    echo gettype($c);  
       
    echo "<br>";

    $d = (int)true; # boolean to int
    echo gettype($d)." ".$d;  //integer 1
    













?>