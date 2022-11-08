<?php
    session_start();

    $con = new coneceta();

    $con->lista_ferr($_SESSION['cod_ferramenta'],$_SESSION['marca_ferramenta'],$_SERVER['nome_ferramenta']);


?>