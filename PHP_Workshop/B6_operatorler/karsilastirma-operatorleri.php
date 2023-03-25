<?php

    /*
        ==	    Equal	                    $x == $y		
        ===	    Identical	                $x === $y	
        !=	    Not equal	                $x != $y	
        <>	    Not equal	                $x <> $y		
        !==	    Not identical	            $x !== $y	
        >	    Greater than	            $x > $y	
        <	    Less than	                $x < $y	
        >=	    Greater than or equal to	$x >= $y		
        <=	    Less than or equal to	    $x <= $y		
        <=>	    Spaceship	                $x <=> $y	
    */

    $a = 5;
    $b = 5;
    $c = 20;
    $d = 2;
    $username = "elifbeyza";

    $sonuc = ($a == $b);    # true
    $sonuc = ($a != $b);    # false
    $sonuc = ($username == 'elifbeyza');    # true
    $sonuc = ($username != 'elifbeyza');    # false
    $sonuc = ($a === $b);    # false
    $sonuc = ($a !== $b);    # false
    $sonuc = ($a > $b);
    $sonuc = ($a >= $b);
    $sonuc = ($a < $c);
    $sonuc = ($a <= $c);

    echo $sonuc. "<br>";  //1
    echo var_dump($sonuc) ."<br>"; //true
    //var_dump($degisken)     degisken=1 ise true, degisken=0 ise false

    /** <=> spaceship
     * $a <=> $c    a, c'y eşit mi? $a = 5,  $c = 20; ise hayır eşit değil ve a < c sonuc= -1 
     * $a <=> $b    a, c'y eşit mi? $a = 5,  $b =  5; ise evet  eşit                sonuc=  0
     * $a <=> $d    a, d'y eşit mi? $a = 5,  $d =  2; ise hayır eşit değil ve a > d sonuc=  1 
     */

    
    $sonuc2 = $a <=> $c;    //a, c'y eşit mi? $a = 5,  $c = 20; ise hayır eşit değil ve a < c sonuc= -1 
    $sonuc3 =  $a <=> $b ;   //a, c'y eşit mi? $a = 5,  $b =  5; ise evet  eşit                sonuc=  0
    $sonuc4 =  $a <=> $d  ;  //a, d'y eşit mi? $a = 5,  $d =  2; ise hayır eşit değil ve a > d sonuc=  1 
    

   
   echo ($sonuc2). "<br>";
   echo ($sonuc3). "<br>";
   echo ($sonuc4). "<br>";

?>