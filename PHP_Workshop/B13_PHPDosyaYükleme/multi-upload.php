<?php 
    //  btnUpload tıklanmış mı    ve value değeri Upload ise butona tıklanmıştır
    if(isset($_POST["btnUpload"]) && $_POST["btnUpload"] == "Upload"){
        
        $dosya_adeti = count($_FILES["fileToUpload"]["name"]);

        for($x=0; $x<$dosya_adeti; $x++){
            $fileTmpPath = $_FILES["fileToUpload"]["tmp_name"][$x];
            $fileName = $_FILES["fileToUpload"]["name"][$x];

            // destination_path - hedef path
            $destination_path = "files/".$fileName;

            // dosya konumu fileTmpPath'ten destination_path'e değişecek
            if(move_uploaded_file($fileTmpPath, $destination_path)){
                // aktarılırken hata olmazsa burası çalışır
                echo $fileName." dosyası yüklendi.<br>";
            }else{
                echo $fileName." dosyası yüklenemedi.<br>";
            }
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
        <input type="file" multiple="multiple" name="fileToUpload[]" >
        <input type="submit" value="Upload" name="btnUpload" >

    </form>

</body>
</html>