<!-- en altta form ile gönderdiğimiz bilgileri "aynı sayfa içerisinde" yukarıda yakalayalım -->
    
<?php 
    $adsoyad =  $email =  $parola = $parola2 = $sehir = $cinsiyet = $tanitim = "";
    $hobiler = [];

    $adsoyadErr =  $emailErr =  $parolaErr = $parola2Err = $sehirErr = $cinsiyetErr = $tanitimErr = $hobilerErr = "";

    function control_input($data){
        $data = trim($data); // trim() içine yazılan karakterin başındaki ve sonundaki boşluğu yok eder
        $data = stripcslashes($data); // sql injection için önlem (ters tırnakların önüne slash koyar)
        $data = htmlspecialchars($data); // gönderilen karakterlerin html entity karşılıklarını yazar. Yani kullanıcının script göndermesini engeller
        return $data;
    }
    /*
     $data = htmlspecialchars($data); // gönderilen karakterlerin html entity karşılıklarını yazar. Yani kullanıcının script göndermesini engeller
        
     örneğin adınız kısmına <script>alert('merhaba')</script> yazalım.
     htmlspecialchars() kullanmazsam kaynak kodun çıktısı:
    <script>alert('mesaj')</script> (kayıt ol a bastıktan sonra alarm da verir) -> bunu istemiyoruz
     htmlspecialchars() sayesinde kaynak kodun çıktısı:
        &lt;script&gt;alert(&#039;mesaj&#039;)&lt;/script&gt;
        &lt(less than), < işaretinin entity karşılığı
    */


    //sayfa ilk yüklendiğinde formdan hiçbir şey gönderilmediği için en yukarıda php kısmı hata gösterir
    //bunun önüne nasıl geçmek için if bloğu ekleyelim
    //if($_SERVER["REQUEST_METHOD"]) ile sayfanın çağırıldığı andan itibarenki method tipine ulaşılır
    //if($_SERVER["REQUEST_METHOD"] == "POST"), if bloğu sayfa sadece POST methodu ile çağırıldığında çalışır
    //sayfa en başta GET ile çağırıldığı için de if bloğu formdan POST ile bilgi alana kadar çalışmaz ve artık hata almayız
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        /*echo "<pre>";
        print_r($_POST);*/
        
        //empty(), içerisi boş mu değil mi kontrolü yapar
        if(empty($_POST['adsoyad'])){
            $adsoyadErr = "adsoyad zorunlu alan."."<br>";
        }else{
            $adsoyad = control_input($_POST['adsoyad']);
        }

        if(empty($_POST['email'])){
            $emailErr = "email zorunlu alan."."<br>";
        }else{
            $email = $_POST['email'];
        }

        if(empty($_POST['parola'])){
            $parolaErr =  "parola zorunlu alan."."<br>";
        }else{
            $parola = $_POST['parola'];
        }

        if(empty($_POST['parola2'])){
            $parola2Err = "parola tekrarı zorunlu alan."."<br>";
        }else{
            $parola2 = $_POST['parola2'];
        }

        if($parola != $parola2){
            $parola2Err = "parola bilgileri eşleşmiyor."."<br>";
        }

        if(empty($_POST['sehir'])){
            $sehirErr = "sehir zorunlu alan."."<br>";
        }else{
            $sehir = $_POST['sehir'];
        }
    
        if(empty($_POST['cinsiyet'])){
            $cinsiyetErr = "cinsiyet zorunlu alan."."<br>";
        }else{
            $cinsiyet = $_POST['cinsiyet'];
        }
    
        if(empty($_POST['tanitim'])){
            $tanitimErr = "tanitim zorunlu alan."."<br>";
        }else{
            $tanitim = $_POST['tanitim'];
        }
    
        //isset() içine yazılan değer tanımlandı mı kontrol eder
        if(!isset($_POST['hobi'])){ // $_POST['hobi'] tanımlanmadıysa burası çalışır
            $hobilerErr = "hobi zorunlu alan."."<br>";
        }else{
            $hobiler = $_POST['hobi'];
        }
    

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

    /*
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        */

    echo "_______________________________________________________________<br><br>";

    }

?>

<style>
    .error{
        color: red;
    }
</style>
    
    
<form action="register.php" method="POST">

    <!-- POST ile verileri gönderdikten sonra kalıcılığını sağlamak için neler yapabiliri?:
            value="<?php //echo $adsoyad; ?>" 
            <?php //if($sehir == '41') echo "selected" ?>
            <?php //if($cinsiyet == 'erkek') echo "checked" ?>
            <?php //if(isset($hobiler) && in_array('sinema', $hobiler)) echo "checked" ?>
     -->
    adınız: <input type="text" name="adsoyad" value="<?php echo $adsoyad; ?>"> 
    <span class="error"><?php echo $adsoyadErr; ?><br><br></span>

    e-mail: <input type="text" name="email" value="<?php echo $email; ?>"> 
    <?php echo $emailErr; ?><br><br>

    parola: <input type="text" name="parola"> 
    <?php echo $parolaErr; ?><br><br>

    parola tekrarı: <input type="text" name="parola2"> 
    <?php echo $parola2Err; ?><br><br>

    şehir: <select name="sehir"> 
        <option value="">Seçiniz</option>
        <option value="41" <?php if($sehir == '41') echo "selected" ?>>Kocaelli</option>
        <option value="34" <?php if($sehir == '34') echo "selected" ?>>İstanbul</option>
        <option value="20" <?php if($sehir == '20') echo "selected" ?>>Denizli</option>
    </select> 
    <?php echo $sehirErr; ?><br><br>

    cinsiyet: <input type="radio" name="cinsiyet" value="erkek" <?php if($cinsiyet == 'erkek') echo "checked" ?>>Erkek  
              <input type="radio" name="cinsiyet" value="kadin" <?php if($cinsiyet == 'kadin') echo "checked" ?>>Kadın
              <br><?php echo $cinsiyetErr; ?><br><br>

    <!--çoklu seçimleri POST methodu ile dizi şeklinde yakalamamız gerekiyor-->
    hobileriniz: <input type="checkbox" name="hobi[]" value="sinema" <?php if(isset($hobiler) && in_array('sinema', $hobiler)) echo "checked" ?>>Sinema 
                 <input type="checkbox" name="hobi[]" value="spor" <?php if(isset($hobiler) && in_array('spor', $hobiler)) echo "checked" ?>>Spor
                 <input type="checkbox" name="hobi[]" value="kitap okumak" <?php if(isset($hobiler) && in_array('kitap okumak', $hobiler)) echo "checked" ?>>Kitap Okumak
                 
                 <br><?php echo $hobilerErr; ?><br><br>

    kendinizi tanıtın: <br>
        <textarea name="tanitim"><?php echo $tanitim; ?></textarea>
         <?php echo $tanitimErr; ?><br><br>

    <input type="submit" value="Kayıt Ol">




        
</form>



