<?php

    # 1- Kendisine gönderilen bir kelimeyi belirtilen kez ekranda gösteren fonksiyonu yazınız. 

    function yazdir($kelime, $adet){
        for($i=1; $i<=$adet; $i++){
            echo $i.". ".$kelime."<br>";
        }
    }

    yazdir("Elif", 4);

    echo "<br><br>";

    # 2- Dikdörgenin alan ve çevresini hesaplayan fonksiyonu yazınız.

    function dikdortgen($kenar1, $kenar2){
        $alan = $kenar1 * $kenar2;
        echo $alan."<br>";
        $cevre = 2 * ($kenar1 + $kenar2);
        echo $cevre."<br>";
    }

    dikdortgen(6, 3);
   
    echo "<br><br>";

    # 3- Yazı tura uygulamasını fonksiyon kullanarak yapınız. 

    function yT(){
        $para = rand(1,10);
        if($para % 2 == 0){
            echo "Yazı <br>";
        }else{
            echo "Tura <br>";
        }
    }
    yT();

    echo "<br><br>";
  
    # 4- Kendisine gönderilen 2 sayı arasındaki tüm asal sayıları bulan fonksiyonu yazınız.
    function asalSayilariBul($start, $stop) {
        for ($sayi=$start; $sayi <= $stop; $sayi++) { 
            $asalmi = true;
            for ($i=2; $i < $sayi ; $i++) { 
                if($sayi%$i==0) {
                    $asalmi = false;
                }
            }
            if($asalmi) {
                echo $sayi.'<br>';
            }
        }
    }
    asalSayilariBul(2,6);

    # 5- Kendisine gönderilen bir sayının tam bölenlerini bir diziyle döndüren fonksiyonu yazınız.

    function bolenleriBul($sayi2){
        $dizi2 = [];
        for($i=1; $i<=$sayi2; $i++){
            if($sayi2 % $i == 0){
                array_push($dizi2, $i);
            } 
        }

        echo "<pre>";
        print_r($dizi2);
        echo "</pre>";

    }
  
    bolenleriBul(20);

?>