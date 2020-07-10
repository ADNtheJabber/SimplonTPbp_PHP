<?php
    namespace model;

    use entities\Logger;
    
class Verif{

    function verifyInfos($logger) {

        $connexion = new DbAccess();
       
        $conn = $connexion->getConnex();
      
        return $conn->prepare("SELECT * FROM `employe` WHERE `nature_poste`='".$logger->getPoste()."' AND `login`='".$logger->getLogin()."' AND `password`='".$logger->getPassword()."'");

    }
}
    