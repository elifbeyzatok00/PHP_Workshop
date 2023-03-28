<?php
   
     $a = 50; $b=4; $c=2;

     // 1- a, b çarpımı ile a, b, c toplamının farkı nedir?
     $sonuc = (($a*$b) - ($a+$b+$c));
     echo $sonuc."<br>";



     // 2- a, b, c toplamının mod 3'ü nedir?
     $sonuc2 = (($a+$b+$c) % 3);
     echo $sonuc2."<br>";

     // 3- b' nin c. kuvvetini hesaplayınız.
     $sonuc3 = ($b**$c);
     echo $sonuc3."<br>";


     // 4- a için 50-100 arasında kontrolü yapınız.
     $sonuc4 = var_dump($a>50 and $b<100);
     echo $sonuc4."<br>";


     // 5- a için pozitif çift kontrolü yapınız.
     $sonuc5 = var_dump($a>0 and $a % 2 == 0);
     echo $sonuc5."<br>";

     // 6 - username ve password ile uygulama giriş kontrolü yapınız.
     $username = "elif";
     $password = "123456";

     $sonuc6 = var_dump($username == "elif" and $password == "123456");
     echo $sonuc6."<br>";


     // 7- a,b,c için büyüklük kontrolü yapınız.

     if($a > $b and $a > $c){
          echo "a is greatest number <br>";
     }else if($b > $a and $b > $c){
          echo "b is greatest number <br>";
     }else{
          echo "c is greatest number <br>";
     }

     // 8- 2 vize(%60) ve final(%40) notuna göre ortalama hesaplayınız.
     //   a- Eğer ortalama 50 ve üstündeyse geçti değilse kaldı yazdırın.
     //   b- Geçmek için ortalama 50 olsa bile final notu en az 50 olmalıdır.
     //   c- Geçmek için finalden 70 alındığında ortalamanın önemi olmasın.

     $vize1=60;
     $vize2=70;
     $final=69;

     $ortalama = ((($vize1+$vize2)/2)*0.6) + ($final*0.4);
     //echo $ortalama;


     //a
     if($ortalama>=50 ){
          echo "Ortalamanız: ".$ortalama." Final notunuz: ".$final." Geçtiniz! <br>";
     }else{
          echo "Ortalamanız: ".$ortalama." Final notunuz: ".$final." Kaldınız :( <br>";
     }

     //b
     if($ortalama>=50 and $final>=50){
          echo "Ortalamanız: ".$ortalama." Final notunuz: ".$final." Geçtiniz! <br>";
     }else{
          echo "Ortalamanız: ".$ortalama." Final notunuz: ".$final." Kaldınız :( <br>";
     }

     //c
     
     if($ortalama>=50 or $final>=50){
          echo "Ortalamanız: ".$ortalama." Final notunuz: ".$final." Geçtiniz! <br>";
     }else{
          echo "Ortalamanız: ".$ortalama." Final notunuz: ".$final." Kaldınız :( <br>";
     }     
     

     

?>