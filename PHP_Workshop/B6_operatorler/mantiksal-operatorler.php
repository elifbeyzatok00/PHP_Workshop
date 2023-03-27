<?php
    /*
        and => x ve y nin true olmasıyla sonuç true olur.
        or  => x ve y den herhangi birinin true olmasıyla sonuç true olur.
        xor => x ve y den herhangi birinin true  olmasıyla sonuç true olur.
        !   => x in tersini alır.
    */

    # (yas >= 18) ve (mezuniyet=="lise" yada mezuniyet=="üniversite") 

    # ve operatörü
    # true ve true => true
    # false ve true => false
    # false ve false => false

    $x = 14;

    # 5 < x < 15 => false

    $sonuc = ($x > 5);    # true
    $sonuc = ($x < 15);   # false
    $sonuc = ($x > 5 and $x < 15);
    
    $hak = 1;
    $devam = 'h';
    $sonuc = ($hak > 0 and $devam=='e');
    


    # or operatörü
    # true  yada true => true
    # false yada true => true
    # false yada false => false

    $x = 5;

    $sonuc = ($x > 0 or $x%2==0); 

    # xor operatörü
    # true  yada true => false
    # false yada true => true
    # false yada false => false

    $x = 10;
    $y = 20;

    $sonuc2 = ($x == 10 xor $y == 201);
    
    # not operatörü
    $sonuc = !($x>0);

    # x, 5-10 arasında bir çift sayı mıdır?

    $x = 6;
    $sonuc = ($x>5 and $x<10) and ($x%2==0);
    echo var_dump($sonuc);


?>