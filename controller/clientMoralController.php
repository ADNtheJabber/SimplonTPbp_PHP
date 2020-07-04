<?php
    require_once '../model/clientMoraldb.php';

    extract($_POST);

    $result = addClientMoral($nom, $adresse, $tel, $emai, $ninea, $regiscom);

    header("location:clientMoral")
?>