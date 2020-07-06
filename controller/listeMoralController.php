<?php
    require '../model/clientMoraldb.php';
    require_once '../entities/clientMoral.php';
        
            $log = readClientMoral();
    
    require '../view/client/listeMoral.php';