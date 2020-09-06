<?php
    require_once "usuario.php";
    class Assistente implements Usuario {
        protected $ramal;

        function Assistente(){
            parent::Usuario();
            $this->ramal="099";
        }

        public function getRamal(){
            return $this->ramal;
        }
        t

































    }







?>