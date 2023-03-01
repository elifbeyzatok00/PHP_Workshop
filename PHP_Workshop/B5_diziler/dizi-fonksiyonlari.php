<?php
    //php array functions

    $sayilar = array(1,5,7,4,56,78,12,45);
    $isimler = array("ali", "zeynep", "canan", "beril");
    $kullanicilar = array("sadikturan"=>"38", "cinarturan"=>"4", "yigitbilgi"=>"12");


    // echo count($sayilar)."<br>";
    // echo count($isimler)."<br>";
    // echo count($kullanicilar)."<br>";

    #artan sırada
    sort($sayilar);
    sort($isimler);
    asort($kullanicilar); //value e göre
    ksort($kullanicilar); //key e göre

    print_r($sayilar);
    echo "<br>";
    print_r($isimler);
    echo "<br>";
    print_r($kullanicilar);

    echo "<br>";

    #azalan sırada
    rsort($sayilar);
    rsort($isimler);
    arsort($kullanicilar); //value e göre
    krsort($kullanicilar); //key e göre

    // print_r($sayilar);
    // echo "<br>";
    // print_r($isimler);
    // echo "<br>";
    // print_r($kullanicilar);


    # string to array 
    $string = "sadık|turan|38";
    $arr = explode("|", $string);
    
    print_r($arr);

    echo "<br>";

    #array to string 
    $arr = array("sadık", "turan", "38");
    $string = implode(",", $arr);

    print_r($string);

    echo "<br>";


    #rastgele sıralama
    print_r($isimler);
    echo "<br>";

    shuffle($isimler);
    print_r($isimler);
    echo "<br>";


    # dizi birleştirme
    $plakalar = array("41", "34");
    $sehirler = array("kocaeli", "istanbul");

    $plaka_bilgileri = array_combine($plakalar, $sehirler);

    print_r($plaka_bilgileri);
    echo "<br>";

    $arr1 = ["istanbul", "kocaeli"];
    $arr2 = ["rize", "izmir"];

    $arr = array_merge($arr1, $arr2);

    print_r($arr);
    echo "<br>";

    # eleman tekrarlama sayıları
    $arr1 = ["istanbul", "kocaeli","istanbul", "kocaeli", "izmir","rize" ];
    $arr = array_count_values($arr1);

    print_r($arr);
    echo "<br>";

    #dizinin sonuna eleman ekleme
    array_push($arr1, "giresun");
    print_r($arr1);
    echo "<br>";

    #dizinin başına eleman ekleme
    array_unshift($arr1, "yalova");
    print_r($arr1);
    echo "<br>";



?>