<?php
    require '../model/clientPhysiquedb.php';
    include '../entities/clientPhysique.php';
  
    extract($_POST);

    if (isset($_POST)) {

        
            $clientPhysique = new ClientPhysique();
            
            $clientPhysique->setNom($_POST['nomPhysique']);
            $clientPhysique->setPrenom($_POST['prenomPhysique']);
            $clientPhysique->setAdresse($_POST['adressePhysique']);
            $clientPhysique->setTel($_POST['telPhysique']);
            $clientPhysique->setEmail($_POST['emailPhysique']);
            $clientPhysique->setIdentifiant($_POST['cni']);
            $clientPhysique->setSalaire($_POST['salaire'] !='' ? $_POST['salaire'] : 0 );
            $clientPhysique->setProfession($_POST['profession']);
            $clientPhysique->setInfosEmp($_POST['infos_emp']);
            
            $log = addClientPhysique($clientPhysique);

            // var_dump($log);
                        
            if ($log) {
               echo 'Ajout effectue avec succes !';
            } else {
                echo 'Ajout Non effectue';
            }
        }