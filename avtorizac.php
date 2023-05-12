<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avtorizac</title> <link rel="stylesheet" href="css\Avtorizac.css">
</head>
<body>
    <form action="vendor/signin.php" method="POST" class="form">
        <h1>Вход</h1>
        <div class="input-form">
                <input type="text" name="login" placeholder="Логин">
        </div>
        <div class="input-form">
                <input type="password" name="pass" placeholder="Пароль">
        </div>
        <div class="input-form">
                <input type="submit" placeholder="Войти">
        </div>
        <a href="register.php" class='forget'>Зарегистрируйся</a>
        <?php if(isset($_SESSION['messag'])){
                echo "<p>".$_SESSION['messag']."</p>";
            }
            unset($_SESSION['messag']);
        ?>
    </form>
</body>
</html>