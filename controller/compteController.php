<?php
    require_once '../model/comptedb.php';
    require_once '../entities/compte.php';
  
    extract($_POST);

    if (isset($_POST)) {

        
            $compte = new compte($_POST['nomPhysique'], $_POST['prenomPhysique'], $_POST['adressePhysique'], $_POST['telPhysique'], $_POST['emailPhysique'], $_POST['cni'], $_POST['profession'], $_POST['salaire'], $_POST['infos_emp']);
            
            $compte->setNumcompte($_POST['nomPhysique']);
            $compte->setTypeCompte($_POST['prenomPhysique']);
            $compte->setFraisOuv($_POST['adressePhysique']);
            $compte->setRemuneration($_POST['telPhysique']);
            $compte->setDateDeblocage($_POST['emailPhysique']);
            $compte->setDepotInitial($_POST['cni']);
            $compte->setIdClientPhysique($_POST['salaire']);
            $compte->setIdClentEntreprise($_POST['profession']);
                        

            $log = addcompte($compte);
            
            if ($log) {
               echo 'Ajout effectue avec succes !';
            } else {
                echo 'Ajout Non effectue',
                header('location:accueil');
            }
        }

        // idCompte numcompte type_compte fraisOuverture remuAnnuelle dateDeblocage depotInitialCC id_client_physique id_client_entreprise
    