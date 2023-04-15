<?php 
    // isset ile set edilmiş mi ve $_POST["btnUpload"] un karşılığı Upload kontrol edilir
    if(isset($_POST["btnUpload"]) && $_POST["btnUpload"]=="Upload"){
        
        echo "<pre>";
        print_r($_FILES);

        $fileTmpPath = $_FILES["fileToUpload"["tmp_name"]];
        $fileName = $_FILES["fileToUpload"["name"]];

        $uploadFolder = './files/';
        $dest_path = $uploadFolder.$fileName;

        //(move_uploaded_file($x, $y) -> yüklenen dosyayı x konumundan y konumuna gönderir
        if(move_uploaded_file($fileTmpPath, $dest_path)){
            echo "dosya yüklendi";
        }else{
            echo "hata";
        }

    }
?>