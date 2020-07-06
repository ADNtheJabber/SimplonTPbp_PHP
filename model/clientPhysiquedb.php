<?php
    require_once 'dbConnect.php';

    //client physique req

        

    function addClientPhysique ($clientPhysique){

        $connexion = new DbAccess();
       
        $conn = $connexion->getConnex();

        //INSERT INTO `client_entreprise`(`id_entreprise`, `nom_entreprise`, `adresse`, `tel`, `email`, `ninea`, `regis_commerce`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])
        
        $sql = $conn->prepare("INSERT INTO `client_physique`(`idclient`, `nom`, `prenom`, `telephone`, `adresse`, `email`, `identifiant`, `salaire`, `profession`, `info_employeur`) 
        
        VALUES (NULL,'".$clientPhysique->getNom()."', '".$clientPhysique->getPrenom()."', '".$clientPhysique->getTel()."', '".$clientPhysique->getAdresse()."', '".$clientPhysique->getEmail()."','".$clientPhysique->getIdentifiant()."','".$clientPhysique->getSalaire()."', '".$clientPhysique->getProfession()."','".$clientPhysique->getInfosEmp()."')");

        $sql->execute();

        return $sql;
    }

    function readClientPhysique(){

        $connexion = new DbAccess();
       
        $conn = $connexion->getConnex();
        
        $sql = $conn->prepare("SELECT * FROM client_physique");

        $sql->execute();

        return $sql;
    }
?>