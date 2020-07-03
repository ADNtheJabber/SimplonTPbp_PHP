<?php
    require 'dbConnect.php';

    //client entreprise req
    function addClientPhysique ($nom, $prenom, $tel, $adresse, $email, $identifiant, $salaire, $profession, $infosEmp){
        $sql = "INSERT INTO client_physique VALUES (NULL, $nom, $prenom, $tel, $adresse, $email, $identifiant, $salaire, $profession, $infosEmp)";

        $conn = getConnex();

        return $conn->exec($sql);
    }

    function readClientPhysique(){
        $sql = "SELECT * FROM client_physique";

        $conn = getConnex();

        return $conn->query($sql);

    }
?>