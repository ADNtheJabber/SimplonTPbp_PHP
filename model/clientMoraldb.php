<?php
    require_once 'dbConnect.php';

    //client entreprise req

        

    function addClientMoral ($clientMoral){

        $connexion = new DbAccess();
       
        $conn = $connexion->getConnex();

        //INSERT INTO `client_entreprise`(`id_entreprise`, `nom_entreprise`, `adresse`, `tel`, `email`, `ninea`, `regis_commerce`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])
        
        $sql = $conn->prepare("INSERT INTO `client_entreprise`(`id_entreprise`, `nom_entreprise`, `adresse`, `tel`, `email`, `ninea`, `regis_commerce`) 
        
        VALUES ('".$clientMoral->getNom()."','".$clientMoral->getAdresse()."', '".$clientMoral->getTel()."', '".$clientMoral->getEmail()."','".$clientMoral->getNinea()."','".$clientMoral->getRegiscom()."')");

        $sql->execute();

        return $sql;
    }

    function readClientMoral(){

        $connexion = new DbAccess();
       
        $conn = $connexion->getConnex();
        
        $sql = $conn->prepare("SELECT * FROM client_entreprise");

        $sql->execute();

        return $sql;
    }
?>