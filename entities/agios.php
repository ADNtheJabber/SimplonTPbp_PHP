<?php

    namespace entities\Agios;
    class Agios {
        
        private $montantAgios;
        private $compteAssoc;


        function __construct(){

        }

        public function getMontantAgios(){
            return $this->$montantAgios;
        }

        public function setMontantAgios($montantAgios){
            $this->montantAgios = $montantAgios;
        }

        public function getCompteAssoc(){
            return $this->$compteAssoc;
        }

        public function setCompteAssoc($compteAssoc){
            $this->compteAssoc = $compteAssoc;
        }
    }
    
?>