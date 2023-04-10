<?php 

    //POST, Client tarafında oluşturulan bir object var. 
    //http request object, kullanıcı tarafından server'a gönderilmesi gereken bilgilerin paketlendiği bir bilgi kümesi

    $username = $_POST["username"];
    $password = $_POST["password"];

    echo $username;
    echo '<br>';
    echo $password;
?>