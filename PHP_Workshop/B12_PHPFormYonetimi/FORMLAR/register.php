<!-- en altta form ile gönderdiğimiz bilgileri "aynı sayfa içerisinde" yukarıda yakalayalım -->
    
<?php 
    //sayfa ilk yüklendiğinde formdan hiçbir şey gönderilmediği için en yukarıda php kısmı hata gösterir
    //bunun önüne nasıl geçmek için if bloğu ekleyelim
    //if($_SERVER["REQUEST_METHOD"]) ile sayfanın çağırıldığı andan itibarenki method tipine ulaşılır
    //if($_SERVER["REQUEST_METHOD"] == "POST"), if bloğu sayfa sadece POST methodu ile çağırıldığında çalışır
    //sayfa en başta GET ile çağırıldığı için de if bloğu formdan POST ile bilgi alana kadar çalışmaz ve artık hata almayız

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $adsoyad = $_POST['adsoyad'];
    $email = $_POST['email'];
    $parola = $_POST['parola'];
    $parola2 = $_POST['parola2'];
    $sehir = $_POST['sehir'];
    $cinsiyet = $_POST['cinsiyet'];
    $hobiler = $_POST['hobi'];
    $tanitim = $_POST['tanitim'];

    echo $adsoyad."<br><br>";
    echo $email."<br><br>";
    echo $parola."<br><br>";
    echo $parola2."<br><br>";
    echo $sehir."<br><br>";
    echo $cinsiyet."<br><br>";
    foreach ($hobiler as $hobi) {
        echo $hobi." | ";
    }
    
    echo "<br><br>";

    echo $tanitim."<br><br>";

    echo "_______________________________________________________________<br><br>";

    /*
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    */

    }

?>
    
    
<form action="register.php" method="POST">
    adınız: <input type="text" name="adsoyad"> <br><br>
    e-mail: <input type="text" name="email"> <br><br>
    parola: <input type="text" name="parola"> <br><br>
    parola tekrarı: <input type="text" name="parola2"> <br><br>
    şehir: <select name="sehir"> 
        <option value="41">Kocaeli</option>
        <option value="34">İstanbul</option>
        <option value="20">Denizli</option>
    </select><br><br>
    cinsiyet: <input type="radio" name="cinsiyet" value="erkek">Erkek  
              <input type="radio" name="cinsiyet" value="kadin">Kadın<br><br>

    <!--çoklu seçimleri POST methodu ile dizi şeklinde yakalamamız gerekiyor-->
    hobileriniz: <input type="checkbox" name="hobi[]" value="sinema">Sinema 
                 <input type="checkbox" name="hobi[]" value="spor">Spor
                 <input type="checkbox" name="hobi[]" value="kitap okumak">Kitap Okumak
                 
                 <br><br>

    kendinizi tanıtın: <br>
        <textarea name="tanitim"></textarea> <br><br>

    <input type="submit" value="Kayıt Ol">




        
</form>