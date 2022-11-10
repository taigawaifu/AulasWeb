<?php
    $onibus = [
        'executiva'=> [],
        'economica'=> []
        

    ];
    if(!isset($_POST['categoria'])){
        echo "Voce não seleciou uma categoria";
    }
    if($_POST['categoria'] == 1){
        if(sizeof($onibus['economica'])<=5){
            array_push($onibus['economica'],"ocupado");
        }
       
        
    }
    if($_POST['categoria'] == 2){
        if(sizeof($onibus['executiva'])<=5){
            array_push($onibus['executiva'],"ocupado");
        } 
        
    }
    for($i = 0 ; $i<5 ; $i++){
    
        $assento = $onibus['executiva'][0] .'a';
        echo $assento;
    }
    
    
    

    
   

    echo "
    <h2>Primeira classe:</h2>
    <ul> 
        <li>assento1:Vazio</l1>
        <li>assento2:Vazio</l1>
        <li>assento3:Vazio</l1>
        <li>assento4:Vazio</l1>
        <li>assento5:Vazio</l1>
    </ul>
    <hr/>
    <h2>Classe econimca:</h2>
    <ul> 
        <li>assento:vazio</l1>
        <li>assento:vazio</l1>
        <li>assento:vazio</l1>
        <li>aseento:vazio</l1>
        <li>assento:vazio</l1>
    </ul>
";

    


    

 
?>