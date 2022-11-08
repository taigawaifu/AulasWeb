<?php
    session_start();
        class coneceta{        
        function inserir_ferr($cod_ferramenta,$nome_ferramenta,$marca_ferramenta){
            $servername="localhost";
            $database="almoxarifado";
            $username="root";
            $password="root";
             
            $con = mysqli_connect($servername, $username, $password, $database);
                if(!$con){
                    die("Conexao falhou" . mysqli_connect_errno());
                }
             $result = $con->query("INSERT INTO  `tb_ferramentas`(`nome_ferramenta`,`marca_ferramenta`,`cod_ferramenta`) VALUES ('$nome_ferramenta','$marca_ferramenta','$cod_ferramenta')");
                $aux_query = $result->fetch_assoc();
                $aux_query  ['cod_ferramenta'];
                $aux_query  ['nome_ferrementa'];
                $aux_query ['marca_ferramenta'];

             $con->close();
        }
        function lista_ferr(){
            $servername="localhost";
            $database="almoxarifado";
            $username="root";
            $password="root";

            $con = mysqli_connect($servername, $username, $password, $database);
 
            if(!$con){
                die("Conexão Falho :( :" .
                mysqli_connect_error());
            }

            $result = $con->query("SELECT * FROM `tb_ferramentas`");

            echo "<table>";
            while($aux_query = $result->fetch_assoc()){

            echo "<tr>";
            echo "<td>". $aux_query['cod_ferramenta']."</td>";
            echo "<td>". $aux_query['nome_ferramenta']."</td>";
    
            echo "<td>". $aux_query['marca_ferramenta']."</td>";
            echo "</tr>"   ;  
            }
            echo "</table>";
             $con->close();   

        }

       function altera_ferra($cod_ferramenta,$nome_ferramenta,$marca_ferramenta){
            $servername= "localhost";
            $database = "almoxarifado";
            $username = "root";
            $password = "root";
             
            $con = mysqli_connect($servername, $username, $password, $database);
                if(empty($con)){
                    die("Conexao falhou" . mysqli_connect_errno());
                }
                $result = $con->query("UPDATE `tb_ferramentas` SET `cod_ferramentas` = '$cod_ferramenta', `nome_ferramenta` = '$nome_ferramenta', `marca_ferramenta` = '$marca_ferramenta' WHERE `id` = $cod_ferramenta");    
                $aux_query = $result->fetch_assoc();
                $_SESSION['id'] = $aux_query = ['cod_ferramenta'];
                $_SESSION['nome_ferramenta'] = $aux_query = ['nome_ferrementa'];
                $_SESSION['marca_ferramenta'] = $aux_query =['marca_ferramenta'];
                
                $con->close();
       }

       function excluir_ferr($cod_ferramenta){
            $servername= "localhost";
            $database = "almoxarifado";
            $username = "root";
            $password = "root";
         
            $con = mysqli_connect($servername,$username,$password,$database);
            if(empty($con)){
                die("Conexao falhou" . mysqli_connect_errno());
            }
            $result = $con->query("DELETE FROM `tb_ferramentas`WHERE `id` = $cod_ferramenta");
            $aux_query = $result->fetch_assoc();
                $_SESSION['id'] = $aux_query = ['cod_ferramenta'];
                $_SESSION['nome_ferramenta'] = $aux_query = ['nome_ferrementa'];
                $_SESSION['marca_ferramenta'] = $aux_query =['marca_ferramenta'];
                
                $con->close();

       }
    }
?>