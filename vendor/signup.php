<?php
  session_start();
  require_once 'conect.php';


  $login = $_POST ['login'];
  $name = $_POST['name'];
  $email= $_POST['email'];
  $pass = md5($_POST['pass']);
  $pass_prover =  md5($_POST['pass_prover']);
  
      
  if ($pass === $pass_prover){
        $sql="INSERT INTO `danie_polzov` (`id`, `login`, `password`, `name`, `email`) VALUES (NULL, '$login', '$pass', '$name','$email')";
        mysqli_query($connect,$sql);
        $_SESSION ['messag']= 'Регистрация прошла успешно';
        header('location:../avtorizac.php');
  }else{
    $_SESSION ['messag'] = 'Пароли не совпадают';
    header('location:../register.php');
  }
  

?>
