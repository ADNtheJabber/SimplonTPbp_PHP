<?php
    require '../model/clientPhysiquedb.php';
    require_once '../entities/clientPhysique.php';
        
            $log = readClientPhysique();
    
    require '../view/client/listePhysique.php';