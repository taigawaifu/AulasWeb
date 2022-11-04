<?php
   // $conexao = new connection();
    session_start();
    header('Location: http://localhost/dashbord.php/');
    
    $conexao->Getname($_SESSION['login']);
    $conexao->Getsaldo( $_SESSION['saldo']);



?>