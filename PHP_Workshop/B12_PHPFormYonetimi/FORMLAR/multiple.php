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
        /*
        //REQUEST_METHOD u POST ise burası çalışır 
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            echo $_POST["username"];
            echo $_POST["email"];
            echo $_POST["password"];
        }
        */

        //_POST içerisinde login bilgisi boş geçilmemişse burası çalışır
        if(isset($_POST['login'])){
            echo "login tıklandı";
            echo $_POST["username"];
            echo $_POST["password"];
        }

        //_POST içerisinde login bilgisi boş geçilmemişse burası çalışır
        if(isset($_POST['register'])){
            echo "register tıklandı";
            echo $_POST["username"];
            echo $_POST["email"];
            echo $_POST["password"];
        }
    ?>

    <form action="multiple.php" method="POST">

        username: <input type="text" name="username">
        password: <input type="text" name="password">
        <input type="submit" name="login" value="Log in">

    </form>

    <form action="multiple.php" method="POST">

        username: <input type="text" name="username">
        email: <input type="text" name="email">
        password: <input type="text" name="password">
        <input type="submit" name="register" value="Register">

    </form>




</body>
</html>