<?php
#associative - çağrışımsal

    #associative arrays 

    #key - value => 41: Kocaeli, 34: İstanbul

    //associative arrays olmasaydı
    $plakalar = array("41", "34");
    $sehirler = array("kocaeli", "istanbul");

    echo "$plakalar[0]: $sehirler[0] <br>";
    echo "$plakalar[1]: $sehirler[1] <br>";

    echo "----------------------------------- <br>";

    //associative arrays oluşturalım
    $plaka_bilgileri = array("41" => "kocaeli", "34" => "istanbul");
    $telefon_rehberi = array("ali" => "5324444", "ahmet" => "55555");

    echo $plaka_bilgileri["41"]."<br>";
    echo $plaka_bilgileri["34"]."<br>";

    //associative arrays e eleman ekleyelim
    $plaka_bilgileri["53"] = "rize";
    $plaka_bilgileri["35"] = "izmir";

    echo $plaka_bilgileri["53"]."<br>";
    echo $plaka_bilgileri["35"]."<br>";

















?>