<?php

    $marka1 = "bmw";
    $marka2 = "toyota";
    $marka3 = "mercedes";

    $markalar = "bmw, toyota, mercedes";

    echo "en sevdiğim araba ".$marka1."<br>";
    echo "en sevdiğim araba ".$marka2."<br>";
    echo "en sevdiğim araba ".$marka3."<br>";


    $markalar2 = array("bmw", "toyota", "mercedes");

    echo gettype($markalar2)."<br>";

    echo $markalar2[0]."<br>"; //bmw
    echo $markalar2[1]."<br>"; //toyota
    echo $markalar2[2]."<br>"; //mercedes


    echo "en sevdiğim araba ".$markalar2[0]."<br>";
    echo "en sevdiğim araba ".$markalar2[1]."<br>";
    echo "en sevdiğim araba ".$markalar2[2]."<br>";










?>