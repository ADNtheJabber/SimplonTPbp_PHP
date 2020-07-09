<?php
    namespace model\Physique;
    
    use model\dbConnect\DbAccess;
    //client physique req

    function addClientPhysique ($clientPhysique){
        $connexion = new DbAccess();
       
        $conn = $connexion->getConnex();
        
        return $conn->exec("INSERT INTO `client_physique` (`idclient`, `nom`, `prenom`, `telephone`, `adresse`, `email`,`identifiant`, `salaire`, `profession`, `info_employeur`) VALUES (NULL,'".$clientPhysique->getNom()."', '".$clientPhysique->getPrenom()."', '".$clientPhysique->getTel()."', '".$clientPhysique->getAdresse()."', '".$clientPhysique->getEmail()."','".$clientPhysique->getIdentifiant()."',".$clientPhysique->getSalaire().", '".$clientPhysique->getProfession()."','".$clientPhysique->getInfosEmp()."')");

    }

    
    function readClientPhysique(){
        $connexion = new DbAccess();

        $conn = $connexion->getConnex();

        return $conn->exec("SELECT * FROM `client_physique`");

    }
?>