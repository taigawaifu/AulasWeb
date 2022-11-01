<?php
    class Cliente{
        public $nome;
        public $itemcomprado;

        function Setcomprar($fruta){

         $this->itemcomprado = $fruta;
        }

        function Getitemcomprado(){
            return $this->itemcomprado;
        }
        function Getnome(){
            return $this->nome;
        }
        function Setname($nome){
            return $this->nome = $nome;
        }
        

        

    }

