<?php
    require_once '../model/comptedb.php';
    require_once '../entities/compte.php';
    require_once '../entities/agios.php';
  
    extract($_POST);

    if (isset($_POST)) {

        
            $compte = new Compte();
            
            $compte->setNumcompte($_POST['noCompte']);
            $compte->setTypeCompte($_POST['typeCompte']);
            $compte->setFraisOuv($_POST['fraisOuv']);
            $compte->setRemuneration($_POST['remu']);
            $compte->setDateDeblocage($_POST['dateDeblocage']);
            $compte->setDepotInitial($_POST['depotCC']);
            $compte->setIdClientPhysique($_POST['IdClientPhysique'] !='' ? $_POST['IdClientPhysique'] : NULL);
            $compte->setIdClientEntreprise($_POST['IdClentEntreprise'] !='' ? $_POST['IdClentEntreprise'] : NULL);
                        

            $agios = new Agios();

            $agios->setMontant($_POST['agiosCC']);
            $agios->setCompteAssoc($_POST['noCompte']);

            $log1 = addAgios($agios);

            $log2 = addcompte($compte);
            
            if ($log1 && $log2) {
               echo 'Ajout effectue avec succes !';
            } else {
                echo 'Ajout Non effectue';
            }

            
        }

        // idCompte numcompte type_compte fraisOuverture remuAnnuelle dateDeblocage depotInitialCC id_client_physique id_client_entreprise
    