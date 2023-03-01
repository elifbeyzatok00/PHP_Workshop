<?php
# multidimensional - çok boyutlu
    $ogrenciA = array("Ali Korkmaz", array(60, 50, 80));
    $ogrenciB = array("Yağmur Yılmaz", array(70, 50, 90));

    echo $ogrenciA[0]; //Ali Korkmaz

    echo "<br>";

    //echo $ogrenciA[1]; //(60, 70, 80)

    //echo "<br>";

    echo $ogrenciA[1][0]; //60  

    echo "<br>";

    $ortalamaA = ($ogrenciA[1][0] + $ogrenciA[1][1] + $ogrenciA[1][2]) / 3 ;
    $ortalamaB = ($ogrenciB[1][0] + $ogrenciB[1][1] + $ogrenciB[1][2]) / 3 ;

    echo "$ogrenciA[0] isimli öğrencinin ortalaması: ".$ortalamaA."<br>";  
    echo "$ogrenciB[0] isimli öğrencinin ortalaması: ".$ortalamaB."<br>"; 


    $ogrenciC = array(
                        "100"=> array(
                            "ad" => "Ahmet",
                            "soyad" => "Yılmaz",
                            "matematik" => array(60,70,90),
                            "fizik" => array(60,70,90)
                        ),
                        "101"=> array(
                            "ad" => "Ayşe",
                            "soyad" => "Yılmaz",
                            "matematik" => array(60,70,90),
                            "fizik" => array(60,70,90)
                        ),
                        "102"=> array(
                            "ad" => "Ali",
                            "soyad" => "Yılmaz",
                            "matematik" => array(60,70,90),
                            "fizik" => array(60,70,90)
                        )
                );

      
    echo $ogrenciC["100"]["ad"]."<br>"; 
    echo $ogrenciC["101"]["ad"]."<br>"; 

    echo "<br>";
    
    echo $ogrenciC["100"]["matematik"][0];

    echo "<br>";

    echo ($ogrenciC["100"]["matematik"][0] + $ogrenciC["100"]["matematik"][1] + $ogrenciC["100"]["matematik"][2]) / 3;



?>