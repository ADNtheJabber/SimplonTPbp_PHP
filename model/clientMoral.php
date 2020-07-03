<?php
Class ClientMoral {

    private $id;
    private $nom;
    private $adresse;
    private $tel;
    private $email;
    private $ninea;
    private $regiscom;

    function __construct(){

    }

    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }

    public function getNom(){
        return $this->nom;
    }
    
    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getAdresse(){
        return $this->adresse;
    }
    
    public function setAdresse($adresse){
        $this->adresse = $adresse;
    }

    public function getTel(){
        return $this->tel;
    }
    
    public function setTel($tel){
        $this->tel = $tel;
    }

    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }

    public function getNinea(){
        return $this->ninea;
    }
    
    public function setNinea($ninea){
        $this->ninea = $ninea;
    }

    public function getRegiscom(){
        return $this->regiscom;
    }
    
    public function setRegistre($regiscom){
        $this->regiscom = $regiscom;
    }

}