<?php
    require 'dbConnect.php';

    //client entreprise req
    function addClientMoral ($nom, $adresse, $tel, $emai, $ninea, $regiscom){
        $sql = "INSERT INTO client_entreprise VALUES (NULL, $nom, $adresse, $tel, $email, $ninea, $regiscom)";

        $conn = getConnex();

        return $conn->exec($sql);
    }

    function readClientMoral(){
        $sql = "SELECT * FROM client_entreprise";

        $conn = getConnex();

        return $conn->query($sql);

    }
?>