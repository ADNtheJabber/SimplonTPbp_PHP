<?php
    namespace model\Compte;
    
    use model\dbConnect\DbAccess;

    function addCompte($compte){
        $connexion = new DbAccess();
       
        $conn = $connexion->getConnex();

        return $conn->exec("INSERT INTO `compte`(`idCompte`, `numcompte`, `type_compte`, `fraisOuverture`, `remuAnnuelle`, `dateDeblocage`, `depotInitialCC`, `id_client_physique`, `id_client_entreprise`) VALUES (NULL,'".$compte->getNumCompte()."','".$compte->getTypeCompte()."', '".$compte->getFraisOuv()."', '".$compte->getRemuneration()."','".$compte->getDateDeblocage()."','".$compte->getDepotInitial()."','','')");

    }


    // function addAgios($agios){
    //     $connexion = new DbAccess();
       
    //     $conn = $connexion->getConnex();

    //     return $conn->exec("INSERT INTO INSERT INTO `agioscc`(`idAgiosCC`, `descriptionAgios`, `montantAgios`, `numcompte`) 
    //             VALUES (NULL, '','".$agios->getMontantAgios()."','".$agios->getCompteAssoc()."')");

    // }

   
    function readAllCompte(){
        $connexion = new DbAccess();
       
        $conn = $connexion->getConnex();

        return $conn->exec("SELECT * FROM compte");

    }