<?php
    session_start();
    $con = new connection();
    header('Location: http://localhost/saldo.php/');

    $con->cadastrarconta($_SESSION['nome'],$_SESSION['saldo'],$_SESSION['cpf']);
    $con->depositar( $_SESSION['saldo'], $_SESSION['nome'],$_SESSION['cpf']);



?>