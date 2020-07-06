<?php
    require_once '../model/clientPhysiquedb.php';
    require_once '../entities/clientPhysique.php';
  
    extract($_POST);

    if (isset($_POST)) {

        
            $clientPhysique = new clientPhysique($_POST['nomPhysique'], $_POST['prenomPhysique'], $_POST['adressePhysique'], $_POST['telPhysique'], $_POST['emailPhysique'], $_POST['cni'], $_POST['profession'], $_POST['salaire'], $_POST['infos_emp']);
            
            $clientPhysique->setNom($_POST['nomPhysique']);
            $clientPhysique->setPrenom($_POST['prenomPhysique']);
            $clientPhysique->setAdresse($_POST['adressePhysique']);
            $clientPhysique->setTel($_POST['telPhysique']);
            $clientPhysique->setEmail($_POST['emailPhysique']);
            $clientPhysique->setIdentifiant($_POST['cni']);
            $clientPhysique->setSalaire($_POST['salaire']);
            $clientPhysique->setProfession($_POST['profession']);
            $clientPhysique->setInfosEmp($_POST['infos_emp']);
            

            $log = addclientPhysique($clientPhysique);
            
            if ($log) {
               echo 'Ajout effectue avec succes !';
            } else {
                echo 'Ajout Non effectue',
                header('location:accueil');
            }
        }
    
