<?php
    namespace model;
   
    use entities\clientMoral;
   
class MoralModel {

    function addClientMoral ($clientMoral){

        $connexion = new DbAccess();
       
        $conn = $connexion->getConnex();

        return $conn->exec("INSERT INTO `client_entreprise`(`id_entreprise`, `nom_entreprise`, `adresse`, `tel`, `email`, `ninea`, `regis_commerce`) VALUES ('".$clientMoral->getNom()."','".$clientMoral->getAdresse()."', '".$clientMoral->getTel()."', '".$clientMoral->getEmail()."','".$clientMoral->getNinea()."','".$clientMoral->getRegiscom()."')");

    }

    function readClientMoral() {
        $connexion = new DbAccess();

        $conn = $connexion->getConnex();
        
        return $conn->exec("SELECT * FROM client_entreprise");

    }
}
    
?>