<?php

    class Agios {
        
        private $id;
        private $description;
        private $montant;
        private $compteAssoc;


        function __construct(){

        }

        public function getId(){
            return $this->$id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getDescription(){
            return $this->$description;
        }

        public function setDescription($description){
            $this->description = $description;
        }

        public function getMontant(){
            return $this->$montant;
        }

        public function setMontant($montant){
            $this->montant = $montant;
        }

        public function getCompteAssoc(){
            return $this->$compteAssoc;
        }

        public function setCompteAssoc($compteAssoc){
            $this->compteAssoc = $compteAssoc;
        }
    }
    
?>