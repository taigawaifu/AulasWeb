<?php
session_start();
 echo "Obrigado por comprar o assento " . $_SESSION['assento'] ;
 echo "Com origem em" . $_SESSION['origem'];
  if(!empty($_SESSION['conexoes'])){
    $n = sizeof($_SESSION['conexoes']);
    echo "E Conexão/Conexões em ";
    foreach($_SESSION['conexoes'] as $cone){
        echo $cone . ",";}
}

?>