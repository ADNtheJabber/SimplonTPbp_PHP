<?php
    require_once 'dbConnect.php';

    function addCompte($numCompte, $type, $){
        $sql = "INSERT INTO compte (idCompte, numcompte, type_compte, fraisOuverture, remuAnnuelle, dateDeblocage, depotInitialCC, id_client_physique, id_client_entreprise) 
                VALUES (NULL, :numCompte, :typeCompte, :frais, :remu, :deblocage, NULL, NULL, NULL)";

        $conn = getConnex();

        return $conn->exec($sql);
    }