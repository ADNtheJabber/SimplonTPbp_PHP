<?php
    $servername = "localhost";
    $dbname = "banquepopulaire";
    $username = "root";
    $password = "";

    //var_dump($_POST);

    try {
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Connexion reussie";



    } 
    catch (PDOException $e) {

        echo "Echec de la connexion : ".$e->getMessage();
    }  
