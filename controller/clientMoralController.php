<?php
    require_once '../config/autoload.php';
    
    use model\MoralModel;
    use entities\clientMoral;
    use model\DbAccess;
   
    extract($_POST);

    if (isset($_POST)) {

            $clientMoral = new ClientMoral();
            
            $clientMoral->setNom($_POST['nomEntreprise']);
            $clientMoral->setAdresse($_POST['adresseEntreprise']);
            $clientMoral->setTel($_POST['telEntreprise']);
            $clientMoral->setEmail($_POST['emailEntreprise']);
            $clientMoral->setNinea($_POST['ninea']);
            $clientMoral->setRegiscom($_POST['regiscommerce']);
            

            $log = addClientMoral($clientMoral);

            // var_dump($log);
            
            if ($log) {
               echo 'Ajout effectue avec succes !';
            } else {
                echo 'Ajout Non effectue';
            }
        }