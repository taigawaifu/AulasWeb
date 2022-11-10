<?php

class Conexao{
    
    function assentos($classe){
        $servername = "localhost";
        $database = "rodoviaria";
        $username = "root";
        $password = "root";

        $x=0;
        $assentos = array();
        $con = mysqli_connect($servername,$username,$password,$database);
        if(empty($con)){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }
        if($classe == 1){
            $result = $con->query("SELECT * FROM `onibus` WHERE `Classe`='Economica'");
            while($aux_query = $result->fetch_assoc()){
                $assentos[$x][0] = $aux_query['Assento'];
                $assentos[$x][1] = $aux_query['Classe'];
                $assentos[$x][2] = $aux_query['Disponivel'];
                $x++;
            }
        }else if($classe == 2){
            $result = $con->query("SELECT * FROM `onibus` WHERE `Classe`='Executiva'");
            while($aux_query = $result->fetch_assoc()){
                $assentos[$x][0] = $aux_query['Assento'];
                $assentos[$x][1] = $aux_query['Classe'];
                $assentos[$x][2] = $aux_query['Disponivel'];
                $x++;
            }
        }
        return $assentos;
    }

    function escolha_assento($assento){
        $servername = "localhost";
        $database = "rodoviaria";
        $username = "root";
        $password = "root";

        $con = mysqli_connect($servername,$username,$password,$database);
        if(empty($con)){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }

        $sql = "UPDATE `onibus` SET `Disponivel`='Não' WHERE `Assento`= '$assento';";

        if ($con->query($sql) === TRUE) {
            $con->close();
            return true;
        } else {
            $con->close();
            return true;
        }
    }

    function resetar(){
        $servername = "localhost";
        $database = "rodoviaria";
        $username = "root";
        $password = "root";

        $con = mysqli_connect($servername,$username,$password,$database);
        if(empty($con)){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }
        
        $sql = "UPDATE `onibus` SET `Disponivel`='Sim' WHERE 1";

        $con->query($sql);
        $con->close();
    }
}