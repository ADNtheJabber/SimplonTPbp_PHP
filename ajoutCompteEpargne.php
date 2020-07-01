<?php
    require 'connexion.php';
    require 'creationCompte.html';

    //ajout compte req
    $requete = $conn->prepare('INSERT INTO compte VALUES (NULL, :numCompte :typeCompte, :frais, :remu)');

        if (isset($_POST['noCompteCB'])) { $numeroCompte = $_POST['noCompteCB']; }
        if (isset($_POST['typeCompteCB'])) { $typeCompte = $_POST['typeCompteCB']; }
        if (isset($_POST['fraisOuvCB'])) { $frais = $_POST['fraisOuvCB']; }
        if (isset($_POST['remuCB'])) { $remu = $_POST['remuCB']; }
        if (isset($_POST['dateDeblocage'])) { $deblocage = $_POST['dateDeblocage']; }
    

        $requete->bindValue(':numCompte', $numeroCompte, PDO::PARAM_STR);
        $requete->bindValue(':typeCompte', $typeCompte, PDO::PARAM_STR);
        $requete->bindValue(':frais', $frais,PDO::PARAM_STR);
        $requete->bindValue(':remu', $remu, PDO::PARAM_STR);
        $requete->bindValue(':deblocage', $deblocage,PDO::PARAM_DATE);
        

        $IsInsertOK = $requete->execute();

        if ($IsInsertOK) {
            echo 'Compte ajouté avec succès !';
        } else {
            echo 'Echec de l\'insertion';
        }
        

?>