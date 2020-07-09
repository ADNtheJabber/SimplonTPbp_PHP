<?php

    namespace entities\Physique;
Class ClientPhysique {

    private $id;
    private $nom;
    private $prenom;
    private $tel;
    private $adresse;
    private $email;
    private $identifiant;
    private $salaire;
    private $profession;
    private $infosEmp;

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

    public function getNom(){
        return $this->nom;
    }
    
    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }
    
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    public function getTel(){
        return $this->tel;
    }
    
    public function setTel($tel){
        $this->tel = $tel;
    }

    public function getAdresse(){
        return $this->adresse;
    }
    
    public function setAdresse($adresse){
        $this->adresse = $adresse;
    }

    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }

    public function getIdentifiant(){
        return $this->identifiant;
    }
    
    public function setIdentifiant($identifiant){
        $this->identifiant = $identifiant;
    }

    public function getSalaire(){
        return $this->salaire;
    }
    
    public function setSalaire($salaire){
        $this->salaire = $salaire;
    }

    public function getProfession(){
        return $this->profession;
    }
    
    public function setProfession($profession){
        $this->profession = $profession;
    }

    public function getInfosEmp(){
        return $this->infosEmp;
    }
    
    public function setInfosEmp($infosEmp){
        $this->infosEmp = $infosEmp;
    }
}

?>