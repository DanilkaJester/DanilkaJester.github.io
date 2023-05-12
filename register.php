<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registeR</title> <link rel="stylesheet" href="css\Avtorizac.css">
</head>
<body>
    <form action="vendor\signup.php" method="post" enctype="multipart/form-data" class="form">
        <h1>Регистрация</h1>
        <div class="input-form">
                <input type="text" name="login" placeholder="Логин">
        </div>
        <div class="input-form">
            <input type="email" name="email" placeholder="Введите адрес электронной почты">
        </div>
        <div class="input-form">
            <input type="text" name="name" placeholder="Имя">
        </div>
        <div class="input-form">
                <input type="password" name="pass" placeholder="Пароль">
        </div>
        <div class="input-form">
                <input type="password" name="pass_prover" placeholder="Пароль">
        </div>
        <div class="input-form">
                <input type="submit" placeholder="Войти">
        </div>
        <a href="avtorizac.php" class='forget'>Автаризируйся</a>
        <p><?php echo $_SESSION['messag']; unset($_SESSION['messag']);?></p>
        <?php if(isset($_SESSION['messag'])){
                echo "<p>".$_SESSION['messag']."</p>";
            }
            unset($_SESSION['messag']);
            ?>
    </form>
</body>
</html>