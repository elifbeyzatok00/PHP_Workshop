<?php  

//value
function addFive($number){
    $number += 5;
    echo $number."<br>";
}

$originalNumber = 10;

addFive($originalNumber);

echo $originalNumber."<br>"; //10
//originalNumber değişmedi çünkü addFive fonk. içine value olarak gönderildi kopyası üzerinde işlem yapıldı
//kopyası da $number a denk geliyor  number = 15 şuan

# value => 001122  => 10
# value => 001123  => 15

echo "<br><br>";

//referans
function addFive2(&$number2){  // number ın başına & koyunca bu bir referans olur
    $number2 += 5;
    echo $number2."<br>";
}

$originalNumber2 = 10;

addFive($originalNumber2);

echo $originalNumber2."<br>"; //15
// referans olarak tanımlayınca bu sefer ikisi de değişir

# $referans  => 001125  => 15
# $referans2 => 001125  => 15

echo "<br><br>";

$liste = [1983, 1995, 2001];

function yasHesapla($tarihler){
    for($i=0; $i< count($tarihler); $i++){
        $tarihler[$i] = 2023 - $tarihler[$i];
    }
    return $tarihler;
}

//value olarak gönderdiğimiz için orjinal listede değişklik olmayacak
echo "<pre>";
print_r($liste);
print_r(yasHesapla($liste));
print_r($liste);
echo "</pre>";


echo "<br><br>";

$liste2 = [1983, 1995, 2001];

function yasHesapla2(&$tarihler2){
    for($i=0; $i< count($tarihler2); $i++){
        $tarihler2[$i] = 2023 - $tarihler2[$i];
    }
    return $tarihler2;
}

//referans olarak gönderdiğimiz için orjinal liste de kopya da değişecek
echo "<pre>";
print_r($liste2);
print_r(yasHesapla($liste2));
print_r($liste2);
echo "</pre>";



/*
 *  & bend gerektiği gibi çalışmadı. hiçbir değişiklik sağlamadı.
 */



















?>