<?php
    require 'connexion.php';
    require 'creationCompte.html';

    //ajout compte req
    $requete = $conn->prepare('INSERT INTO compte VALUES (NULL, :numCompte :typeCompte, :frais, :remu)');

        if (isset($_POST['noCompteCC'])) { $numeroCompte = $_POST['noCompteCC']; }
        if (isset($_POST['typeCompteCC'])) { $typeCompte = $_POST['typeCompteCC']; }
        if (isset($_POST['fraisOuvCC'])) { $frais = $_POST['fraisOuvCC']; }
        if (isset($_POST['remuCC'])) { $remu = $_POST['remuCC']; }
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