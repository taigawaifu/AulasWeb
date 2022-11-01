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
        include_once './Fruta.php';
        include_once './Cliente.php';
        $maca = new Fruta();
       
        $maca->Setnome('maça');
        $maca->Setprecokg(2);
        $maca->Setpeso(10);
        $maca->comprafruta(2);
        


        $bergamota = new Fruta();
        $bergamota->Setnome('bergamota');
        $bergamota->Setprecokg(10);
        $bergamota->Setquantidade(22);
        $bergamota->Getquantidade();
        echo $bergamota->precototal(23);
        $bergamota->Setpeso(90);

        
        $lista = array($maca,$bergamota);
        //echo '<pre>'; var_dump($lista); echo '</pre>';


        $jose = new Cliente();
        //Definir nome do cliente 
        $jose->Setname("Paulo");

        //definir oq foi comprado
        $jose->Setcomprar($bergamota);
        
        //Quantidade de frutas no estoque
        $maca->Setestoque(6);
        $bergamota->Setestoque(90);
    ?>
    <h1>
        <?php  echo $jose->Getnome().' Comprou '.$bergamota->Getquantidade().' '.$jose->Getitemcomprado()->nome?>
    <p>
       <?php echo 'O estoque era:'.$bergamota->Getestoque(); ?>  
       <?php $bergamota->comprafruta($bergamota->Getquantidade());?>
       <?php echo 'É ficou:'.$bergamota->Getestoque()?>
    </p>
</body>
</html>