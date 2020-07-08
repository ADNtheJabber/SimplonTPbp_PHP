<?php
    require_once 'dbConnect.php';

    function addCompte($compte){
        $connexion = new DbAccess();
       
        $conn = $connexion->getConnex();

        return $conn->exec("INSERT INTO `compte`(`idCompte`, `numcompte`, `type_compte`, `fraisOuverture`, `remuAnnuelle`, `dateDeblocage`, `depotInitialCC`, `id_client_physique`, `id_client_entreprise`) VALUES ('".$compte->getNom()."','".$compte->getAdresse()."', '".$compte->getTel()."', '".$compte->getEmail()."','".$compte->getNinea()."','".$compte->getRegiscom()."')");

    }


    function addAgios($agios){
        $connexion = new DbAccess();
       
        $conn = $connexion->getConnex();

        return $conn->exec("INSERT INTO INSERT INTO `agioscc`(`idAgiosCC`, `descriptionAgios`, `montantAgios`, `numcompte`) 
                VALUES (NULL, '','".$agios->getMontant()."','".$agios->getCompteAssoc()."')");

    }

   
    function readAllCompte(){
        $connexion = new DbAccess();
       
        $conn = $connexion->getConnex();

        return $conn->exec("SELECT * FROM compte");

    }