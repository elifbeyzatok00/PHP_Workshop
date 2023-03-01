<?php
    echo "sonuc= ".(10 + 5)."<br>" ;

    $sayi1 = 10;
    $sayi2 = 20;

    echo "sonuc= ".($sayi1 + $sayi2)."<br>" ;  //30

    echo "sonuc= ".($sayi1 + $sayi2 / $sayi1)."<br>" ; //12
    //işlem önceliği vardır


    echo is_int(10)."<br>";
    echo var_dump(is_int(10))."<br>";
    //is_int  integer mı?  1/0
    //var_dump  true/ false

    echo var_dump(is_numeric("10"))."<br>";

    echo abs(-10)."<br>";  //mutlak değerini verir

    // 5 ve üstü olması önemli değil:
    echo ceil(4.3)."<br>";  //yukarı yuvarlar
    echo floor(4.3)."<br>";  //aşağı yuvarlar


    echo floor(4.3)."<br>";  //5 ve üzeri ise yukarı yuvarlar 
    //5ten küçükse aşağı yuvarlar

    echo sqrt(25)."<br>";  //karekök al

    echo pow(2,5)."<br>";  //üs al  // 2^5

    echo max(2, 3, 10, 4, 89)."<br>";
    echo min(2, 3, 10, 4, 89)."<br>";





?>