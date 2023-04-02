<?php

   function addNumbers($a, $b){
    return $a + $b;
   }

   echo addNumbers(10, 20)."<br>"; //30
   echo addNumbers("10", "20")."<br>"; //30
    //parametreleri string versek bile php onları int çevirebiliyorsa arka planda bunu otomatik olarak yapar

    echo "<br><br>";

    //böyle durumlarda parametreler için tip tanımlamaları yapılabilir

    function addNumbers2(int $a, int $b){
        return $a + $b;
       }
    
       echo addNumbers2(10, "20")."<br>"; //30
       //"20" ile int e çevrilebilir bir string gönderdik bu yüzden kızmadı 
       //ama kızmasını istersek:

       echo "<br><br>";

       declare(strict_types=1); 
       //string değer number a çevrilebiliyorsa bile benim için öndemli değil demiş oldum
       //yani buna da artık dikkat edecek
       function addNumbers3(int $a, int $b){
        return $a + $b;
       }
    
       //echo addNumbers3(10, "20")."<br>"; //hata
       echo addNumbers3(10, 20)."<br>";

       echo "<br><br>";

       declare(strict_types=1); 
       //string değer number a çevrilebiliyorsa bile benim için öndemli değil demiş oldum
       //yani buna da artık dikkat edecek
       function addNumbers4(int $a, int $b, bool $isActive, array $numbers ) : int{
        return $a + $b;
       }
    
       echo addNumbers4(10, 20, true, [10, 20])."<br>"; 
       //farklı değerler de gönderilebilri bool gibi
       // örn bool $isActive için true/ false gönderilmeli
       // "true" hata verir


       // : int ile fonksiyonun return ile döndürdüğü değerin tipi verilebilir


















?>