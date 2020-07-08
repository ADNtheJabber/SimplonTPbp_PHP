<?php
    require_once 'dbConnect.php';
    

    function verifyInfos($logger) {

        $connexion = new DbAccess();
       
        $conn = $connexion->getConnex();
      
        // SELECT * FROM `employe` WHERE `nature_poste`='responsable' AND `login`='cheDiouf123' AND `password`='Xeuycito'

        return $conn->prepare("SELECT * FROM `employe` WHERE `nature_poste`='".$logger->getPoste()."' AND `login`='".$logger->getLogin()."' AND `password`='".$logger->getPassword()."'");

    }