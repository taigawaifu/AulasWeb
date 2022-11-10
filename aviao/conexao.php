<?php
class Conexao{

    function connectToDataBase() {
        
        $servername = "localhost";
        $database = "Airplane";
        $username = "root";
        $password = "root";
        $con = mysqli_connect($servername,$username,$password,$database);
        
        return $con;
    }


    function PegarCidades(){
        

        $x=0;
        $lugares = array();

        
        connectToDataBase();
        
        if(empty($con)){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }
            $result = $con->query("SELECT * FROM `destinos` WHERE 1");
            while($aux_query = $result->fetch_assoc()){
                $lugares[$x] = $aux_query['Cidade'];
                $x++;
            }
        return $lugares;
    }

    function VooPequeno(){
        $x=0;
        $voos = array();

        connectToDataBase();
        if(empty($con)){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }
            $result = $con->query("SELECT * FROM `voos` WHERE `Tamanho`='Pequeno'");
            while($aux_query = $result->fetch_assoc()){
                $voos[$x][0] = $aux_query['Numero'];
                $voos[$x][1] = $aux_query['Disponivel'];
                $x++;
            }
        return $voos;
    }

    function VooMedio(){

        $x=0;
        $voos = array();

        connectToDataBase();
        if(empty($con)){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }
            $result = $con->query("SELECT * FROM `voos` WHERE `Tamanho`='Pequeno' AND `Tamanho`='Médio'");
            while($aux_query = $result->fetch_assoc()){
                $voos[$x][0] = $aux_query['Numero'];
                $voos[$x][1] = $aux_query['Disponivel'];
                $x++;
            }
        return $voos;
    }

    function VooGrande(){

        $x=0;
        $voos = array();

        connectToDataBase();
        if(empty($con)){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }
            $result = $con->query("SELECT * FROM `voos` WHERE 1");
            while($aux_query = $result->fetch_assoc()){
                $voos[$x][0] = $aux_query['Numero'];
                $voos[$x][1] = $aux_query['Disponivel'];
                $x++;
            }
        return $voos;
    }

    function RegistraVoo($origem,$destino,$conexoes){

        if(empty(connectToDataBase())){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }

        $sql = "INSERT INTO `voos` (`Origem`,`Destino`,`Conexoes`) VALUES ('$origem','$destino','$conexoes')";

        if($con->query($sql) == TRUE && $origem != null && $destino != null && $conexoes != null){
            $con->close();
            return true;
        }else{
            $con->close();
            return false;
        } 
    }

    function ListaVoos(){

        $x=0;
        $voos = array();

        connectToDataBase();
        if(empty($con)){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }
            $result = $con->query("SELECT * FROM `voos` WHERE 1");
            while($aux_query = $result->fetch_assoc()){
                $voos[$x][0] = $aux_query['Voo'];
                $voos[$x][1] = $aux_query['Origem'];
                $voos[$x][2] = $aux_query['Destino'];
                $voos[$x][3] = $aux_query['Conexoes'];
                $x++;
            }
        return $voos;
    }
}
?>
?>