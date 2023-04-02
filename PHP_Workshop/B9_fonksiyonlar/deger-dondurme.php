<?php

    function toplam() {
        return 10+20;
    }

    // echo toplam() + 20;

    function simdi() {
        return date('Y');
    }

    function saat() {
        return date('h');
    }

    function selamlama() {
        if (saat()<12) {
            return 'günaydın'; 
        } else {
            return 'merhaba';
        }
    }

    echo selamlama().' Sadık';

    function yasHesapla() {
        return simdi() - 1983;
    }

    $sonuc = yasHesapla();

    echo $sonuc;




?>