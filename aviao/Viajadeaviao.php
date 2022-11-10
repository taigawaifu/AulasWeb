<?php
  session_start();
  foreach($_SESSION['cidades'] as $cidade){
      echo '<option value="'.$cidade.'">'.$cidade.'</option>';
  }


?>

 <?php  
 foreach($_SESSION['cidades'] as $cidade){
    echo '<option value="'.$cidade.'">'.$cidade.'</option>';
     }
    ?>