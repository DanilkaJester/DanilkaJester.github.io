<?php
     session_start();
     require_once 'conect.php';

     $login =$_POST['login'];
     $pass = md5($_POST['pass']);   

     $check_user =  mysqli_query($connect, "SELECT * FROM `danie_polzov` WHERE `login`='$login' AND `password`='$pass'");
     
     if (mysqli_num_rows($check_user)>0) { 
            $user = mysqli_fetch_assoc($check_user);

            $_SESSION['user']=[
                "id"=>$user['id'],
                    "email"=>$user['email'],
                        "name"=>$user['name']
            ];
            
            header('Location: ../tovar.php');
     }else{
            $_SESSION['messag'] = 'НЕ верный логин или пароль';
            header('Location: ../avtorizac.php') ;
     }


?>