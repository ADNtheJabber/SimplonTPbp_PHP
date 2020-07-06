<?php

    Class Compte {

        private $id;
        private $numCompte;
        private $typeCompte;
        private $fraisOuv;
        private $remuneration;
        private $dateDeblocage;
        private $depotInitial;
        private $idClientPhysique;
        private $idClientEntreprise;

        function __construct(){

        }

        // public function hydrate(array $donnees) {

        //     foreach ($donnees as $key => $value) {
        //         $method = 'set'.ucfirst($key);
        
        //         if (method_exists($this, $method)) {
        //               $this->$method($value);
        //         }
        //     }
        // }

        public function getId(){
            return $this->id;
        }
        
        public function setId($id){
            $this->id = $id;
        }
    
        public function getNumCompte(){
            return $this->numCompte;
        }
        
        public function setNumCompte($numCompte){
            $this->numCompte = $numCompte;
        }
    
        public function getTypeCompte(){
            return $this->typeCompte;
        }
        
        public function setTypeCompte($typeCompte){
            $this->typeCompte = $typeCompte;
        }
    
        public function getFraisOuv(){
            return $this->fraisOuv;
        }
        
        public function setFraisOuv($fraisOuv){
            $this->fraisOuv = $fraisOuv;
        }
    
        public function getRemuneration(){
            return $this->remuneration;
        }
        
        public function setRemuneration($remuneration){
            $this->remuneration = $remuneration;
        }
    
        public function getDateDeblocage(){
            return $this->dateDeblocage;
        }
        
        public function setDateDeblocage($dateDeblocage){
            $this->dateDeblocage = $dateDeblocage;
        }
    
        public function getDepotInitial(){
            return $this->depotInitial;
        }
        
        public function setDepotInitial($depotInitial){
            $this->depotInitial = $depotInitial;
        }

        public function getIdClientPhysique(){
            return $this->idClientPhysique;
        }
        
        public function setIdClientPhysique($idClientPhysique){
            $this->idClientPhysique = $idClientPhysique;
        }
    
        public function getIdClientEntreprise(){
            return $this->idClientEntreprise;
        }
        
        public function setIdClientEntreprise($idClientEntreprise){
            $this->idClientEntreprise = $idClientEntreprise;
        }
    }

?>