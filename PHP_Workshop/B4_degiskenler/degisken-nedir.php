<?php
    

    $urunA = 5000;
    $urunB = 6000;
    $oran = 0.18; //KDV oranı

    echo $urunA + ($urunA * $oran);  // 5900
    echo "<br>";
    echo $urunB + ($urunB * $oran);
    

?>