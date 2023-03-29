<?php
   
     $a = 51; $b=78; $c=200;

     // 4- a için 50-100 arasında kontrolü yapınız.          
     if ($$a>50 and $a<100) {
         echo "a 50-100 arasındadır.";
     } else {
         echo "a 50-100 arasında değildir.";
     }

     echo "<br>"; 

     // 5- a için pozitif çift kontrolü yapınız.
     if ($a > 0 and $a % 2 == 0) {
         echo "a sıfırdan büyük çift sayıdır.";
     } else {
        echo "a sıfırdan büyük çift sayı değildir";
     }


     echo "<br>"; 

     // 7- a,b,c için büyüklük kontrolü yapınız.

     if ($a>$b and $a>$c) {
        echo "a en büyük sayı";
     } elseif ($b>$a and $b>$c) {
        echo "b en büyük sayı";
     } elseif ($c>$a and $c>$b) {
        echo "c en büyük sayı";
     } else {
         echo "hatalı sonuç";
     }

     echo "<br>"; 

     // 8- 2 vize(%60) ve final(%40) notuna göre ortalama hesaplayınız.
     //   a- Eğer ortalama 50 ve üstündeyse geçti değilse kaldı yazdırın.
     //   b- Geçmek için ortalama 50 olsa bile final notu en az 50 olmalıdır.
     //   c- Geçmek için finalden 70 alındığında ortalamanın önemi olmasın.

    $vize1 = 10;
    $vize2 = 10;
    $final = 70;

    $ortalama = (($vize1+ $vize2)/ 2) * 0.4 + ($final * 0.6);
    echo $ortalama;
    echo "<br>";  

    # a
    if ($ortalama >= 50) {
        echo "geçti";
    } else {
        echo "kaldı";
    }

    echo "<br>"; 

    # b
    if($ortalama >= 50 and $final>=50) {
        echo "geçti";
    } else {
        echo "kaldı";
    }

    echo "<br>"; 

    # c
    if ($ortalama >= 50 or $final>=70) {
        echo "geçti";
    } else {
        echo "kaldı";
    }
    
?>