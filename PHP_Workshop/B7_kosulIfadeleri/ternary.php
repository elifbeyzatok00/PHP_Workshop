<?php

   $yas = 15;
   $egitim = 'lise';

   if($yas>=18) {
       if ($egitim=='lise' or $egitim=='üniversite') {
           echo "ehliyet alabilir";
       }else {
           echo "eğitim yetersiz";
       }
   } else {
       echo "yaşınız tutmuyor";
   }

   echo "<br>";

// ternary
echo ($yas >= 18) ? "ehliyet alabilir":"ehliyet alamaz";

echo "<br>";

    echo ($yas >= 18) 
            ? ($egitim=='lise' or $egitim=='üniversite') 
                ? "ehliyet alabilir"
                : "eğitim yetersiz"
            : "yaşınız tutmuyor";

?>