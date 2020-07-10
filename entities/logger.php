<?php

    namespace entities;
    Class Logger{

        private $login, $password, $poste;

        public function __construct(){

        }

        // public function hydrate(array $donnees) {

        //       foreach ($donnees as $key => $value) {
        //         $method = 'set'.ucfirst($key);
        
        //         if (method_exists($this, $method)) {
        //               $this->$method($value);
        //         }
        //     }
        // }

        public function getLogin(){
            return $this->login;
        }

        public function setLogin($login){
            $this->login = $login;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function getPoste(){
            return $this->poste;
        }

        public function setPoste($poste){
            $this->poste = $poste;
        }

    }