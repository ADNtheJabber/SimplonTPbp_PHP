<?php
    require_once '../model/comptedb.php';

    extract($_POST);

    $resultCC = addCompteCourant($id, $numcompte, $typeCompte, $fraisOuv, $remuneration, $dateDeblocage, $depotInitial, $idClientPhysique, $idClientEntreprise);

    $resultCB = addCompteCourant($id, $numcompte, $typeCompte, $fraisOuv, $remuneration, $dateDeblocage, $depotInitial, $idClientPhysique, $idClientEntreprise);

    $resultCE = addCompteEpargne($id, $numcompte, $typeCompte, $fraisOuv, $remuneration, $dateDeblocage, $depotInitial, $idClientPhysique, $idClientEntreprise);

    header("location:clientPhysique")
?>