<?php
    require_once 'dbConnect.php';

    function addCompteCourant($id, $numcompte, $typeCompte, $fraisOuv, $remuneration, $dateDeblocage, $depotInitial, $idClientPhysique, $idClientEntreprise){
        $sql = "INSERT INTO compte (idCompte, numcompte, type_compte, fraisOuverture, remuAnnuelle, dateDeblocage, depotInitialCC, id_client_physique, id_client_entreprise) 
                VALUES (NULL, $numcompte, $typeCompte, $fraisOuv, $remuneration, $dateDeblocage, $depotInitial, $idClientPhysique, $idClientEntreprise)";

        $conn = getConnex();

        return $conn->exec($sql);
    }


    function addCompteEpargne($id, $numcompte, $typeCompte, $fraisOuv, $remuneration, $dateDeblocage, $depotInitial, $idClientPhysique, $idClientEntreprise){
        $sql = "INSERT INTO compte (idCompte, numcompte, type_compte, fraisOuverture, remuAnnuelle, dateDeblocage, depotInitialCC, id_client_physique, id_client_entreprise) 
                VALUES (NULL, $numcompte, $typeCompte, $fraisOuv, $remuneration, $dateDeblocage, $depotInitial, $idClientPhysique, $idClientEntreprise)";

        $conn = getConnex();

        return $conn->exec($sql);
    }

    
    function addCompteBloque($id, $numcompte, $typeCompte, $fraisOuv, $remuneration, $dateDeblocage, $depotInitial, $idClientPhysique, $idClientEntreprise){
        $sql = "INSERT INTO compte (idCompte, numcompte, type_compte, fraisOuverture, remuAnnuelle, dateDeblocage, depotInitialCC, id_client_physique, id_client_entreprise) 
                VALUES (NULL, $numcompte, $typeCompte, $fraisOuv, $remuneration, $dateDeblocage, $depotInitial, $idClientPhysique, $idClientEntreprise)";

        $conn = getConnex();

        return $conn->exec($sql);
    }

    
    function readAllCompte(){
        $sql = "SELECT * FROM compte";

        $conn = getConnex();

        return $conn->exec($sql);
    }