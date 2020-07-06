<?php
    require_once 'dbConnect.php';
    require_once '../entities/logger.php';
    require_once '../controller/loginController.php';

    extract ($_POST);

    function verifyInfos($logger) {

        $connexion = new DbAccess();
       
        $conn = $connexion->getConnex();
      
        // SELECT * FROM `employe` WHERE `nature_poste`='responsable' AND `login`='cheDiouf123' AND `password`='Xeuycito'

        $sql = $conn->prepare("SELECT * FROM `employe` WHERE `nature_poste`='".$logger->getPoste()."' AND `login`='".$logger->getLogin()."' AND `password`='".$logger->getPassword()."'");

        $sql->execute();

        return $sql;
    }