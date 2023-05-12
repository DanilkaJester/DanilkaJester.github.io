
<?php

 
  session_start();
  require_once 'conect.php';


  // $tovarov_v_zakave = $_POST['tovarov_v_zakave'];
  // $total_amount= $_POST['total_amount'];
  // $order_composition = $_POST['order_composition'];
  $name =  $_POST['name'];
  $nime_telefon =  $_POST['nime_telefon'];
  $email=$_POST['email'];


  $sql_bang_bang= "INSERT INTO `karzina` (`id`, `name`, `nime_telefon`, `email`) VALUES (NULL,  '$name', '$nime_telefon', '$email')";
  mysqli_query($connect,$sql_bang_bang);


 
  
print_r($_POST);
?>

  
  
