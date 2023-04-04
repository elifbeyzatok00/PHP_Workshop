<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .green{
            background-color: green;
            color: white;
        }
        .red{
            background-color: red;
            color: white;
        }
    </style>

</head>
<body>
    <ul>
        <?php 
            // for ($i=0; $i < 10; $i++) { 
            //     echo "<li>item {$i}</li>";
            // }
        ?>

        <?php for ($i=0; $i < 10; $i++): ?>
            <li>item <?php echo $i ?></li>
        <?php endfor; ?>
    </ul>

    <?php 
        $urunler = [
            ["Samsung S20 ", 7000, true],
            ["Samsung S21 ", 7000, false],
            ["Samsung S22 ", 7000, false]
        ];
    ?>

    <table>
        <tr>
            <th>Ürün adı</th>
            <th> Fiyat </th>
            <th> Durum </th>
        </tr>

        <?php foreach ($urunler as $urun): ?>
            <tr class="<?php if($urun[2]) {echo 'green';} else {echo 'red';}?>">
                <?php foreach ($urun as $detay): ?>
                    <td><?php echo $detay; ?></td>
                <?php endforeach; ?>   
            </tr>
        <?php endforeach; ?>   

    </table>


</body>
</html>