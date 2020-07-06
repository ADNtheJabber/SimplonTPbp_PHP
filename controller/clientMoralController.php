<?php
    require_once '../model/clientMoraldb.php';
    require_once '../entities/clientMoral.php';
  
    extract($_POST);

    if (isset($_POST)) {

        
            $clientMoral = new clientMoral($_POST['nomEntreprise'], $_POST['adresseEntreprise'], $_POST['telEntreprise'], $_POST['emailEntreprise'], $_POST['ninea'], $_POST['regiscommerce']);
            
            $clientMoral->setNom($_POST['nomEntreprise']);
            $clientMoral->setAdresse($_POST['adresseEntreprise']);
            $clientMoral->setTel($_POST['telEntreprise']);
            $clientMoral->setEmail($_POST['emailEntreprise']);
            $clientMoral->setNinea($_POST['ninea']);
            $clientMoral->setRegiscom($_POST['regiscom']);
            

            $log = addClientMoral($clientMoral);
            
            if ($log) {
               echo 'Ajout effectue avec succes !';
            } else {
                echo 'Ajout Non effectue',
                header('location:accueil');
            }
        }
    
