<?php 

$isimler = array('ali', 'çınar', 'zeynep');

foreach($isimler as $isim){
    echo $isim."<br>";
}

echo "<br>";

$urunler = array(
    array('Iphone 11', 7000),
    array('Iphone 12', 8000),
    array('Iphone 12 Pro', 9000)
);

foreach ($urunler as $urun) {
    print_r($urun);
}

echo "<br><br>";

foreach ($urunler as $urun) {
    print_r($urun[0].' '.$urun[1].' '."<br>");
}

echo "<br><br>";    

$arabalar = array(
    'K101'=> array(
        'marka' => 'opel',
        'model' => 'corsa',
        'uretimYili' => '2020',
        'renk' => 'kırmızı',
        'fiyat' => '150000'
    ),
    'K102'=> array(
        'marka'=> 'toyota',
        'model'=> 'yaris',
        'uretimYili' => '2020',
        'renk' => 'beyaz',
        'fiyat' => '160000'
    ),

);

foreach ($arabalar as $araba => $value) {
    print_r($value);
}

echo "<br><br>"; 

foreach ($arabalar as $araba => $value) {
    print_r($value['marka']);
}

echo "<br><br>"; 

foreach ($arabalar as $key => $value) {
    echo $key.' '.$value['marka'].' '.$value['model'].'<br>';
}

























?>