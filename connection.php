<?php
session_start();
    class connection{
        public $servername = "localhost";
        public $database = "banco";
        public $usurname = "root";
        public $passaword = "root";
        public $con = mysqli_connect($servername,$database,$usurname,$passaword);

        function login($senha,$login,$con){
            $con = mysqli_connect($login,$senha);
            if(empty($con)){
                die("Conexao falhou" . mysqli_connect_error());
            }
            $result = $con->query("SELECT `idnome`, FROM usuario WHERE usuario = '$senha' and AND login = '$login' ");
            $aux_query = $result->fetch_assoc();
            $_SESSION['id'] = $aux_query['idnome'];
            $_SESSION['login'] = $aux_query['login'];
            $_SESSION['senha'] = $aux_query['senha'];
            
            if($aux_query['login'] == $login && $aux_query['senha'] == $senha && $login != null && $senha !=null){
               
                return false;
            }else{
                
                return true;
            }
            $con->close();
        }
      
        function Getsaldo(){
            return $this->saldo;
        }
        function Getname(){
            return $this->nome;
        }
        function excluirconta($nome,$senha,$cpf,$con){

        }
        function cadastrarconta($nome,$senha,$cpf,){
            $con = mysqli_connect($nome,$senha,$cpf,);
            if(empty($con)){
                die("Conexao falhou" . mysqli_connect_error());
            }
            $sql = "INSERT INTO usuario (nome, senha , saldo, cpf) VALUES ('$nome','$senha','$cpf')";

            if($con->query($sql) == TRUE && $nome !=null && $senha !=null){
                $aux_query = $result->fetch_assoc();
                $_SESSION['id'] = $aux_query['idnome'];
                $_SESSION['nome'] = $aux_query['nome'];
                $_SESSION['cpf'] = $aux_query['cpf'];

                $con->close();
            }

        }
        function depositar($nome,$saldo,$cpf){
            $con = mysqli_connect($nome,$saldo);
            if(empty($con)){
                die("Conexao falhou" . mysqli_connect_error());
            }
            $sql = "INSERT INTO usuario (saldo) VALUES ('$saldo')";
              if($con->query($sql) == TRUE  && $saldo < 0){
                $aux_query = $result->fetch_assoc();
                $_SESSION['saldo'] = $aux_query['saldo'];
                $_SESSION['nome'] = $aux_query['nome'];
                $_SESSION['cpf'] = $aux_query['saldo'];
              }  
        }

        
    }


    



?>