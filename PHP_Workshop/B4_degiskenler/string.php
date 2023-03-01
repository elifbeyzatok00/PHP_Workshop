<?php

    $ad = "Sadık";
    $soyad = "Turan";
    $yas = 38;

    $mesaj = "my name is Sadık Turan and 38 years old";
    $mesaj2 = "my name is $ad $soyad and $yas years old";
    $mesaj3 = 'my name is $ad $soyad and $yas years old';

    echo $mesaj."<br>";
    echo $mesaj2."<br>";
    echo $mesaj3."<br>";

    echo $mesaj[0]."<br>";  //m
    echo $mesaj[3]."<br>";  //n  //boşluk da 1 karakter sayıldı

    echo strlen($mesaj)."<br>"; //40   //strlen ile gönderdiğimiz değişkende kaç karakter var öğreniriz

    echo str_word_count($mesaj)."<br>";  //9   //str_word_count ile gönderdiğimiz değişken kaç kelime var öğreniriz

    echo strtolower($mesaj)."<br>";   //küçük harfe çevirir
    echo strtoupper($mesaj)."<br>";   //büyük harfe çevirir
    echo ucfirst($mesaj)."<br>";   //Baş harfibüyük harfe çevirir
 
    echo str_replace("Sadık", "Çınar", $mesaj)."<br>";   //değiştirdik
 
    echo str_replace(["Sadık", 38], ["Aslı", 24], $mesaj)."<br>";   //değiştirdik
 
?>