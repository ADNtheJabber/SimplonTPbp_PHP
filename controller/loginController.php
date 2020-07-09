<?php
    require_once '../config/autoload.php';
    
    use entities\log\logger;
    use model\log\verifyInfos;
    require_once '../model/logindb.php';
    require_once '../entities/logger.php';
    //include '../index.php';

    extract($_POST);

    if (!empty($_POST['login']) || !empty($_POST['password'])) {

        
            $logger = new Logger($_POST['postChoice'], $_POST['login'], $_POST['password']);
            
            $logger->setPoste($_POST['postChoice']);
            $logger->setLogin($_POST['login']);
            $logger->setPassword($_POST['password']);

            // var_dump($logger);
            // die;

            $log = verifyInfos($logger);
            // var_dump($log);
            // die;

            // $row = $log->fetchAll();
    
            if ($log) {
                header('location:accueil');
            } else {
                echo 'Information(s) incorrecte(s)',
                header('location:index.php');
            }
        }
    
