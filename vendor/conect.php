 <?php
      mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);  
  
   
  
    $connect = mysqli_connect('localhost','root','','register');

    if(!$connect):
      die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
    endif;
   
   
    
 ?>