<?php
    
    // global scope
    $x = 5;
    $y = 10;

    function myTest() {   
       //local scope 1
       $x = 10;
       echo $x."<br>";  //çalışması için localde de $x tanımlanmalı
    }

    function myTest2() {   
        //local scope 2
        $x = 20;
        echo $x."<br>";  //çalışması için localde de $x tanımlanmalı
     }

    echo $x."<br>";  //5
    myTest(); // 10
    myTest2(); // 10

    echo "<br><br>";
   

    //globalde tanımlanmış değişkenleri localde kullanmak için:
    // 1. global keyword ünü kullan
    function myTest3() {   
        //local scope 3
        global $x, $y;
        return $x + $y;
        
     }
    
    $sonuc = myTest3();
    echo $sonuc;  //15

    echo "<br><br>";

    //globalde tanımlanmış değişkenleri localde kullanmak için:
    // 2. PHP'deki global değişkenleri kullanmak 
    function myTest4() {   
        //local scope 4
        $GLOBALS['y'] = $GLOBALS['x']  + $GLOBALS['y']; // global y = 5+10 = 15 oldu
        
     }

    
    myTest4();
    echo $y;  //15

    echo "<br><br>";

    function myTest5(){
        $x = 0;
        echo $x;
        $x++;
    }

    myTest5(); //0
    myTest5(); //0
    myTest5(); //0

    #burada myTest5 çağırıldığında x yazdırılır(0) ve sonra 1 arttırılır ama bellekte tutulmaz
    #bu yüzden myTest5 tekrar çağırıldığında x baştaki değerini 0 yazdırır


    echo "<br><br>";

    //eğer değişken değerlerini bellekte tutmak istersek static tanımlarız
    function myTest6(){
        static $x = 0;
        echo $x;
        $x++;
    }

    myTest6(); //0
    myTest6(); //1
    myTest6(); //2



    //özet: globalde tanımlanan değişkenlere local'den
    //      localde tanımlanan değişkenlere globalden ulaşılamaz



?>