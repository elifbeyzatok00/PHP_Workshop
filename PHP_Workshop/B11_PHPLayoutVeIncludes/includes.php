<?php 
    $renk = "beyaz";
    $marka = "toyota";
?>

<?php
    function hosgeldiniz(){
        return "Web sitemize hoş geldiniz.";
    }
?>

<p><?php echo hosgeldiniz(); ?></p>
<p>Onun <?php echo $renk.' '.$marka ?> arabası var</p>
<p>Web sitesi hakkında açıklamalar</p>

