<?php

    /*
        1- Ürünleri numeric dizide saklayınız ve ürün fiyatları ortalamasını hesaplayınız.
           
            IPhone 11: 7000
            IPhone 12: 9000
            Samsung S20: 8000
    */

    $urun1 = array("IPhone 11", 7000);
    $urun2 = array("IPhone 12", 9000);
    $urun3 = array("Samsung S20", 8000);

    $urunler = array($urun1, $urun2, $urun3);

    //ya da

    $urunler2 = array(
                        array("IPhone 11", 7000), 
                        array("IPhone 12", 9000), 
                        array("Samsung S20", 8000)
                    );




    $ortalamaFiyat = ($urunler[0][1] + $urunler[1][1] + $urunler[2][1]) / 3 ;
    echo $ortalamaFiyat;

    echo "<br> ------------------------------ <br>";
    /*

        2- Aşağıdaki oyuncu bilgilerini "players" isimli dizi içinde saklayınız. (associative array)

        player 1: 
            nickname     => ronaldo
            name         => Cristiano Ronaldo
            yearOfBirth  => 1985
            nationality  => Portugal
            current_team => Portugal
            history      => Juventus,Real Madrid,Portugal

        player 2: 
            nickname     => messi
            name         => Lionel Messi
            yearOfBirth  => 1987
            nationality  => Argentina
            current_team => Barcelona,
            history      => Barcelona,Argentina,Portugal
    */

    $players = array(
                    "player 1" => array(
                                        "nickname"     => "ronaldo",
                                        "name"         => "Cristiano Ronaldo",
                                        "yearOfBirth"  => 1985,
                                        "nationality"  => "Portugal",
                                        "current_team" => "Portugal",
                                        "history"      => "Juventus,Real Madrid,Portugal"
                    ),
                    "player 2" => array(
                        "nickname"     => "messi",
                        "name"         => "Lionel Messi",
                        "yearOfBirth"  => 1987,
                        "nationality"  => "Argentina",
                        "current_team" => "Barcelona",
                        "history"      => "Barcelona,Argentina,Portugal"
                    ),



    );


    echo $players["player 1"]["nickname" ];

    echo "<br>";

    print_r($players);

    echo "<br>";

    print_r($players["player 1"]["name"]);

    echo "<br>";

    print_r($players["player 2"]["history"]);



    ?>