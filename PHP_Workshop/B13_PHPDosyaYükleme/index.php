<?php 
    // isset ile set edilmiş mi ve $_POST["btnUpload"] un karşılığı Upload kontrol edilir
    if(isset($_POST["btnUpload"]) && $_POST["btnUpload"]=="Upload"){
        /*
        echo "<pre>";
        print_r($_FILES);
        */
        # Dosya özelliklerinin kontrolü:
        # dosya boyutu
        # dosya ismini kontrol ederek random isim verebiliriz
        # dosya uzantısının kontrtolü
        # dosya seçilmiş mi?

        if(isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"]==0 ){



            $uploadOk = 1;
            $fileTmpPath = $_FILES["fileToUpload"["tmp_name"]];
            $fileName = $_FILES["fileToUpload"["name"]];
            $dosyaAdi_uzantilari = array('jpg', 'jpeg', 'png');

            # dosya seçilmiş mi?
            if(empty($fileName)){
                echo "dosya seçiniz";
                $uploadOk = 0;
            }

            #dosya boyutunu kontrol et
            $fileSize = $_FILES["fileToUpload"["size"]];

            if( $fileSize > 5000){ #500 KB
                echo "Dosya bpyutu fazla";
                $uploadOk = 0;
            }

            # dosya uzantısının kontrtolü
            $dosyaAdi_Arr = explode(".", $fileName); //explode ile noktadan ayır dedik
            $dosyaAdi_uzantisiz =  $dosyaAdi_Arr[0];
            $dosyaAdi_uzantisi =  $dosyaAdi_Arr[1];

            if(in_array($dosyaAdi_uzantisi, $dosyaAdi_uzantilari)){
                echo "dosya uzantısı kabul edilmiyor <br>";
                echo "kabul edilen dosya uzantıları: ".implode(',', $dosyaAdi_uzantilari);
                $uploadOk = 0;
            }

            # dosya ismini kontrol ederek random isim verebiliriz
            $yeni_dosyaAdi = (time().$dosyaAdi_uzantisiz).'.'.$dosyaAdi_uzantisi;

            $uploadFolder = './files/';
            $dest_path = $uploadFolder.$fileName;

            if($uploadOk == 0){
                echo "Dosya yüklenmedi";
            }else{
                //(move_uploaded_file($x, $y) -> yüklenen dosyayı x konumundan y konumuna gönderir
                if(move_uploaded_file($fileTmpPath, $dest_path)){
                    echo "dosya yüklendi";
                }else{
                    echo "hata";
                }
            }
        }else{
            echo "hata oluştu ";
            echo 'hata: '.$_FILES["fileToUpload"]["error"];
        }
        

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- dosya yükleme işlemi yapmak istiyorsak enctype="multipart/form-data"  kullanmak zorundayız  -->
    <form  method="POST" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" >
        <input type="submit" value="Upload" name="btnUpload" >

    </form>

</body>
</html>