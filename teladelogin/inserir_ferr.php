<?php

    session_start();

    $con = new coneceta();

    $con->inserir_ferr($_SESSION['cod_ferramenta'],$_SESSION['marca_ferramenta'],$_SESSION['nome_ferramenta']);

    

?>