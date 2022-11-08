<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once 'conceta.php';
        session_start();
            $lista = new coneceta();
            $lista->lista_ferr();     
            $lista->inserir_ferr($_SESSION['cod_ferramenta'],$_SESSION['marca_ferramenta'],$_SESSION['nome_ferramenta']);
            $lista->altera_ferra($_SESSION['cod_ferramenta'],$_SESSION['marca_ferramenta'],$_SESSION['nome_ferramenta']);
            $list->excluir_ferr($_SESSION['cod_ferramenta']);
        ?>
     
</body>
</html>