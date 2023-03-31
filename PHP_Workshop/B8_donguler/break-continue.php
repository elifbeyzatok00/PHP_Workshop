<?php 

$mesaj = 'Hello World';

for ($i=0; $i < strlen($mesaj); $i++) { 
    if ($i == 3) {
        break;
    }
    echo $mesaj[$i].'<br>';
}
echo 'döngü dışına çıkıldı';


echo "<br><br>";

for ($i=0; $i < strlen($mesaj); $i++) { 
    if ($mesaj[$i] == 'o') {
        break;
    }
    echo $mesaj[$i].'<br>';
}
echo 'döngü dışına çıkıldı';


echo "<br><br>";

for ($i=0; $i < strlen($mesaj); $i++) { 
    if ($mesaj[$i] == 'o') {
        continue;
    }
    echo $mesaj[$i].'<br>';
}
echo 'döngü dışına çıkıldı ve "o" yazdırılmadı';

echo "<br><br>";

//1-100 arasındaki çift sayıların toplamı
$a=0;
$toplam = 0;
while ($a <= 100) {
    $a++;
    if($a % 2 == 1){
        continue;
    }
    $toplam += $a;
}
echo "toplam: ".$toplam;

echo "<br><br>";

?>