<?php

    $sayi = 3;

    if($sayi == 3) {
        echo "üç";
    } elseif($sayi==4) {
        echo "dört";
    } else {
        echo "yanlış";
    }

    echo "<br>";

    switch ($sayi) {
        case 3:
            echo "üç";
            break;
        case 4:
            echo "dört";
            break;        
        default:
            echo "yanlış";
            break;
    }

    echo "<br>";

    $not = 69;

    if ($not>=0 and $not<25) {
        echo "notunuz: 0";
    } elseif ($not>=25 and $not<45) {
        echo "notunuz: 1";
    }
    elseif ($not>=45 and $not<55) {
        echo "notunuz: 2";
    }
    elseif ($not>=55 and $not<70) {
        echo "notunuz: 3";
    }
    elseif ($not>=70 and $not<85) {
        echo "notunuz: 4";
    } 
    elseif ($not>=85 and $not<=100) {
        echo "notunuz: 5";
    }
    else {
        echo "yanlış";
    }
    
    echo "<br>";

    switch ($not) {
        case ($not>=0 and $not<25):
            echo "notunuz: 0";
            break;
        case ($not>=25 and $not<45):
            echo "notunuz: 1";
            break;
        case ($not>=45 and $not<55):
            echo "notunuz: 2";
            break;
        case ($not>=55 and $not<70):
            echo "notunuz: 3";
            break;
        case ($not>=70 and $not<85):
            echo "notunuz: 4";
            break;
        case ($not>=85 and $not<=100):
            echo "notunuz: 5";
            break;
        
        default:
            echo "yanlış";
            break;
    }

    echo "<br>";

    $ay = "nisan";

    switch ($ay) {
        case 'ocak':
        case 'şubat':
            echo "kış mevsimi";
            break;
        case 'mart':
        case 'nisan':
        case 'mayıs':
            echo "ilkbahar mevsimi";
            break;          
        
        default:
            echo "yanlış bilgi";
            break;
    }

?>