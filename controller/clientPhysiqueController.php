<?php
    require_once '../model/clientPhysiquedb.php';

    extract($_POST);

    $result = addClientPhysique($nom, $prenom, $tel, $adresse, $email, $identifiant, $salaire, $profession, $infosEmp);

    header("location:clientPhysique")
?>