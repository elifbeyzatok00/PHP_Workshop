<?php

    /*    
        a = b   	a = b	
        a += b	    a = a + b		
        a -= b	    a = a - b		
        a *= b	    a = a * b		
        a /= b	    a = a / b		
        a %= b	    a = a % b	    
        a **= b	    a = a ** b	
        a .= b      a = a . b    
    */

    $a;

    $a = 20;
    $b = 2;
    $c = $a;
    $d = ($a + 10) * 2;

    // $a += $b;       # a = a + b;
    // $a -= $b;       # a = a - b;
    // $a *= $b;       # a = a * b;
    // $a /= $b;       # a = a / b; 
    // $a %= $b;       # a = a % b; 
    // $a **= $b;      # a = a ** b; 

    $ad = "Elif ";
    $soyad = "Beyza";

    $ad .= $soyad;

    echo $ad;

    echo $a, $b, $c, $d;

?>