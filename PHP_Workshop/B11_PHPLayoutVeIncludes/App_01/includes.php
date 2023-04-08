<!-- 
    ilgili dosyaları require komutu ile dahil edelim
    require - gerekmek
-->
<?php require "_variables.php"?>  

<?php require "_functions.php"?>  

<p><?php echo hosgeldiniz(); ?></p>
<p>Onun <?php echo $renk.' '.$marka ?> arabası var</p>

<?php require "_footer.php"?> 

<!-- 
    require ile tanımlanmış kodlardan 1 tanesinde bile hata olsa "kendisinden sonraki diğer tüm kodları etkiler"!
    Ve Fatal Error (ölümcül hata) olarak algılayıp diğer kodların da çalışmasını engeller

    include ile tanımlanmış kodlardan 1 tanesinde hata varsa diğer kodlar bundan etkilenmez.
    Diğer kodlar da çalışmaya devam eder

-->

<?php include "_footer.php"?> 
<?php include "_footer.php"?> 


<!-- 
    include_once ile çağırılan dosyalar uygulama içerisinde yalnızca 1 kez dahil edilir

-->

<?php include_once "_footer.php"?> 
<!-- bu kodun çıktısı olmayacak çünkü _footer.php yukarıda çağırılmış bu yüzden de include_once'tan sonra bir daha çağırılmaz-->