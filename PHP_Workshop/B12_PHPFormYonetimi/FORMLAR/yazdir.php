<?php 

    //GET, url'nin sonuna gelecek bir query string'e karşılık gelir
    //http kısmına http://localhost/B12_PHPFormYonetimi/FORMLAR/yazdir.php?q=php&category=yazilim yazdık
    //q=php ve category=yazilim diye htpp kısmında atama yaptık
    //GET ile bu atamaları htppden aldık ve yazdir.php içinde tekrar atama yapıp en son echo ile yazdırdık
    
    //amaç server tarafına parametre göndermek değil!
    //Amaç: server tarafından bilgi alırken ekstra bilgi göndererek filtreleme işlemi yapmak
    $query = $_GET['q'];
    $category = $_GET['category'];

    echo $query;
    echo '<br>';
    echo $category;
?>