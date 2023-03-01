<?php
    $sayilar = array(1,2,3,4,5);
    $isimler = array("ali", "ahmet");

    echo "$sayilar[0] <br>"; //1
    echo "$sayilar[1] <br>";
    echo "$sayilar[2] <br>";
    echo "$sayilar[3] <br>";
    echo "$sayilar[4] <br>";

    //ezdik
    $sayilar[0] = "bir";
    echo "$sayilar[0] <br>"; //bir

    //diziye eleman ekledik
    $sayilar[5] = "5";
    echo "$sayilar[5] <br>"; //5


    //döngüler - loop

    echo "$isimler[0] <br>";
    echo "$isimler[1] <br>";


    $markalar = "bmw, toyota, mercedes";

    $markalar2 = explode(",", $markalar);
    //explode fonk. ile "," lerden diziyi ayırdık. yeni dizi oluşturduk

    echo "araba markası: $markalar2[0] <br>";
    echo "araba markası: $markalar2[1] <br>";
    echo "araba markası: $markalar2[2] <br>";











?>