<?php

    # 1- (1-100) arasındaki sayılardan 3 ve 5' e bölünenleri yazdırınız.

    $sayi=1;
    while($sayi >= 1 and $sayi <= 100){
        if($sayi%3==0 and $sayi%5==0){
            echo $sayi."<br>";
        }
        $sayi++;
    }
  
    echo "<br>";

    # 2- (20-30) arasındaki tek sayıların toplamı nedir?
    $sayi2=20;
    $toplam=0;
    while($sayi2>=20 and $sayi2<=30){
        if($sayi2%2 !== 0){ //$sayi2%2 == 1 de yazabiliriz
            $toplam = $toplam +  $sayi2;
            
        }
        $sayi2++;
    }
    echo $toplam;

    echo "<br><br>";

    # 3- (100-10) arasındaki sayıları yazdırınız.

    $sayi3=100;
    while($sayi3<=100 and $sayi3>=10){
        echo $sayi3."<br>";
        $sayi3--;
    }

    echo "<br><br>";
        
    # 4- (1-10) arasında rastgele benzersiz 5 sayı üretiniz.

    //kendi çözümüm: (1-10) arasında  5 sayı üretiniz. Benzersiz kısmını yapamadım
    $sayi4=1;
    $sayac=0;
    while($sayi4>=1 and $sayi4<=10){
        echo rand()."<br>";
        $sayac++;
        if($sayac == 5){
            break;
        }
        $sayi4++;
    }

    echo "<br><br>";
    //hocanın çözümü: (1-10) arasında rastgele benzersiz 5 sayı üretiniz.
    $liste = array();

    while (count($liste) != 5){
        $sayi5 = rand(1, 10);
        echo $sayi5." ";
        echo "<br>";

        if(!in_array($sayi5, $liste)){ //in_array($sayi5, $liste), sayi5 elemanı liste içinde varsa true gösterir  
            //eğer sayi listede yoksa listeye eklenesin
            array_push($liste, $sayi5);
        }
        
    }

    print_r($liste);

?>