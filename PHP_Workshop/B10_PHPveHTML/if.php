<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $isLoggedIn = true;
        //$isLoggedIn = false;
        //$role = 'admin';
        $role = 'customer';
    ?>

    <ul>
        <li>
            <a href="">Anasayfa</a>
        </li>
        <li>
            <a href="">Ürünler</a>
        </li>
        
        <?php 
            // if(!$isLoggedIn){
            //     echo    '<li>
            //             <a href="">Giriş</a>
            //         </li>
            //         <li>
            //             <a href="">Kayıt Ol</a>
            //         </li>';
            // }
        ?>
        

        <?php if (!$isLoggedIn): ?>

            <li>
                 <a href="">Giriş</a>
            </li>
            <li>
                <a href="">Kayıt Ol</a>
            </li>
        
        <?php else: ?>

            <li>
                <a href="">Hesabım</a>
            </li>

        <?php endif; ?>

        <?php if ($isLoggedIn and $role == 'admin'): ?>

            <li>
                <a href="">Yönetim Paneli</a>
            </li>

        <?php endif; ?>
       
    </ul>
</body>
</html>