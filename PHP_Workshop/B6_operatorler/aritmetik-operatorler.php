<?php
    /*  
        +	    Toplama	                $x + $y	    	
        -	    Çıkarma	                $x - $y	    
        *	    Çarpma	                $x * $y	    	
        /	    Bölme	                $x / $y	    	
        %	    Mod Alma	            $x % $y	    	
        **	    Üs Alma	                $x ** $y
        ++$x    İşlem öncesi arttırma	
        --$x    İşlem öncesi azaltma	
        $x++    İşlem sonrası arttırma	
        $x--    İşlem sonrası azaltma	
    */

    $a = 10;
    $b = 5;

    echo $a + $b;
    echo "<br>";

    echo $a - $b;
    echo "<br>";

    echo $a * $b;
    echo "<br>";

    echo $a / $b;
    echo "<br>";

    echo $a % $b;
    echo "<br>";

    echo $a ** $b;  //üs alma
    echo "<br>";

    echo ++$a; //11 işlem öncesi arttır
    echo "<br>";

    echo $a++; //11 işlem sonrası arttır
    echo "<br>";

    echo $a; //12
    echo "<br>";

    echo --$a;
    echo "<br>";

    echo $a--;
    echo "<br>";

    echo 10001 % 2;
    echo "<br>";
    echo 2 ** 3;
?>
