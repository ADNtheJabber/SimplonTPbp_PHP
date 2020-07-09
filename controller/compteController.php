<?php
    require_once '../config/autoload.php';
    
    use entities\Compte\Compte;
    use entities\Agios\Agios;
    use model\Compte\addCompte;
    
  
    extract($_POST);

    if (isset($_POST)) {

        
            $compte = new Compte();
            
            $compte->setNumcompte($_POST['noCompte']);
            //$compte->setTypeCompte($_POST['Compte']);
            $compte->setFraisOuv($_POST['fraisOuv']);
            $compte->setRemuneration($_POST['remu']);
            $compte->setDateDeblocage($_POST['dateDeblocage']);
            $compte->setDepotInitial($_POST['depotCC']);
            //$compte->setIdClientPhysique($_POST['idClient'] !='' ? $_POST['idClient'] : NULL);
           // $compte->setIdClientEntreprise($_POST['IdClient'] !='' ? $_POST['IdClientEntreprise'] : NULL);
                        

            //$agios = new Agios();

            // $agios->setMontantAgios($_POST['agiosCC']);
            // $agios->setCompteAssoc($_POST['noCompte']);

            // $log1 = addAgios($agios);

            $log2 = addcompte($compte);
            
            if ($log2) {
               echo 'Ajout effectue avec succes !';
            } else {
                echo 'Ajout Non effectue';
            }

            
        }

        // idCompte numcompte type_compte fraisOuverture remuAnnuelle dateDeblocage depotInitialCC id_client_physique id_client_entreprise
    