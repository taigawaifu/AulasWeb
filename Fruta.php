<?php
    class Fruta{
        public $peso;
        public $precoKg;
        public $nome;
        public $estoque = 100;
        public $quantidade;
        function Getnome(){
           return $this->nome; 
        }
        function Setnome($nome){
            $this->nome = $nome;

        }
        function Getpeso(){
            return $this->peso;
        }
        function SetPeso($peso){
            return $this->peso = $peso;
        }
        function Getprecokg(){
            
            return $this->precoKg;
        }
        function Setprecokg($precoKg){
            return $this->precoKg = $precoKg;
        }
        function precototal($quantidade){
            $pesototal = $this->peso*$quantidade;
             
            $precototal = $this->precoKg*$pesototal;
            return $pesototal;
        }
        function Setestoque($estoque){
            return $this->estoque = $estoque;
        }
        function Getestoque(){
            return $this->estoque;
        }
        function comprafruta($quantidade){

           $this->estoque -= $quantidade;
        }
        function Getquantidade(){
            return $this->quantidade;
        }
        function Setquantidade($quantidade){
            return $this->quantidade = $quantidade;
        }
    }   

?>