<?php

$username = "elifbeyza";
$password = "1234";

if ($username != "elifbeyza") {
    echo "username yanlış.";
} elseif($password !="1234") {
    echo "parola yanlış";
} else {
    echo "giriş yapıldı";
}

echo "<br>";

$saat = date("H");

echo "Saat:".$saat."<br>";

if ($saat <10) {
    echo "Günaydın";
} elseif($password < 20) {
    echo "İyi günler";
} else {
    echo "İyi geceler";
}

?>

