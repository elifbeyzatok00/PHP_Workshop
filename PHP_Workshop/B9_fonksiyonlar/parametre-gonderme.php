<?php
    function selamlama($isim) {
        return "merhaba ".$isim."<br>";
    }

    echo selamlama("ali");
    echo selamlama("ahmet");
    echo selamlama("ece");

    function toplam($a, $b) {
        return $a + $b;
    }

    echo toplam(10,20);
    echo toplam(20,50);

    function yil(){
        return date('Y');
    }

    function yasHesapla($dogumYili) {
        return yil() - $dogumYili;
    }

    echo "<br>";

    $sonuc = yasHesapla(1983);
    $sonuc = yasHesapla(1995);

    echo $sonuc."<br>";

    function emekliligeKacyilKaldi($dogumYili, $isim) {
        $yas = yasHesapla($dogumYili);

        $kalanSure = 65 - $yas;

        if ($kalanSure>0) {
            return "$isim, emekliliğine $kalanSure yıl kaldı";
        } else {
            return "$isim, zaten ".($kalanSure*-1)." yıl önce emekli oldun.";
        }
    }

    $sonuc2 = emekliligeKacyilKaldi(1983, "Sadık");
    $sonuc2 = emekliligeKacyilKaldi(1950, "Ahmet");

    echo $sonuc2;

?>