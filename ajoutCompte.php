<?php
    require 'connexion.php';

    //ajout compte req
    $requete = $conn->prepare('INSERT INTO compte VALUES (NULL, :typeCompte, :id_client_physique, :id_client_entreprise)');

        if (isset($_POST['nomPhysique'])) { $nom = $_POST['nomPhysique']; }
        if (isset($_POST['prenomPhysique'])) { $prenom = $_POST['prenomPhysique']; }
        if (isset($_POST['adressePhysique'])) { $adresse = $_POST['adressePhysique']; }
        if (isset($_POST['telPhysique'])) { $tel = $_POST['telPhysique']; }
        if (isset($_POST['emailPhysique'])) { $email = $_POST['emailPhysique']; }
        if (isset($_POST['id'])) { $id = $_POST['cni']; }
        if (isset($_POST['salaire'])) { $salaire = $_POST['salaire']; }
        if (isset($_POST['profession'])) { $profession = $_POST['profession']; }
        if (isset($_POST['infos_emp'])) { $infos = $_POST['infos_emp']; }
    

        $requete->bindValue(':nom', $_POST['nomPhysique'], PDO::PARAM_STR);
        $requete->bindValue(':prenom', $_POST['prenomPhysique'], PDO::PARAM_STR);
        $requete->bindValue(':adresse', $_POST['adressePhysique'],PDO::PARAM_STR);
        $requete->bindValue(':tel', $_POST['telPhysique'], PDO::PARAM_STR);
        $requete->bindValue(':email', $_POST['emailPhysique'],PDO::PARAM_STR);
        $requete->bindValue(':id', $_POST['cni'],PDO::PARAM_STR);
        $requete->bindValue(':salaire', $_POST['salaire'],PDO::PARAM_STR);
        $requete->bindValue(':profession', $_POST['profession'],PDO::PARAM_STR);
        $requete->bindValue(':infos', $_POST['infos_emp'],PDO::PARAM_STR);

        $requete->execute();

?>


//client physique req
        $requete = $conn->prepare('INSERT INTO client_physique VALUES (NULL, :nom, :prenom, :tel, :adresse, :email, :id, :salaire, :profession, :infos)');

        if (isset($_POST['nomPhysique'])) { $nom = $_POST['nomPhysique']; }
        if (isset($_POST['prenomPhysique'])) { $prenom = $_POST['prenomPhysique']; }
        if (isset($_POST['adressePhysique'])) { $adresse = $_POST['adressePhysique']; }
        if (isset($_POST['telPhysique'])) { $tel = $_POST['telPhysique']; }
        if (isset($_POST['emailPhysique'])) { $email = $_POST['emailPhysique']; }
        if (isset($_POST['id'])) { $id = $_POST['cni']; }
        if (isset($_POST['salaire'])) { $salaire = $_POST['salaire']; }
        if (isset($_POST['profession'])) { $profession = $_POST['profession']; }
        if (isset($_POST['infos_emp'])) { $infos = $_POST['infos_emp']; }
    

        $requete->bindValue(':nom', $_POST['nomPhysique'], PDO::PARAM_STR);
        $requete->bindValue(':prenom', $_POST['prenomPhysique'], PDO::PARAM_STR);
        $requete->bindValue(':adresse', $_POST['adressePhysique'],PDO::PARAM_STR);
        $requete->bindValue(':tel', $_POST['telPhysique'], PDO::PARAM_STR);
        $requete->bindValue(':email', $_POST['emailPhysique'],PDO::PARAM_STR);
        $requete->bindValue(':id', $_POST['cni'],PDO::PARAM_STR);
        $requete->bindValue(':salaire', $_POST['salaire'],PDO::PARAM_STR);
        $requete->bindValue(':profession', $_POST['profession'],PDO::PARAM_STR);
        $requete->bindValue(':infos', $_POST['infos_emp'],PDO::PARAM_STR);

        $requete->execute();


        //client entreprise req
        $requete=$conn->prepare('INSERT INTO 
        client_entreprise (nom_entreprise, adresse, tel, email, ninea, regis_commerce) 
                                    VALUES 
        (:nom, :adresse, :tel, :email, :ninea, :regiscommerce)');


        if (isset($_POST['nom'])) {$nom = $_POST['nom_client_entreprise']; }
        if (isset($_POST['adresse'])) { $adresse = $_POST['adresse_client_entreprise']; }
        if (isset($_POST['tel'])) { $tel = $_POST['tel_client_entreprise']; }
        if (isset($_POST['email'])) { $email = $_POST['email_client_entreprise']; }
        if (isset($_POST['ninea'])) { $salaire = $_POST['ninea']; }
        if (isset($_POST['regiscommerce'])) { $profession = $_POST['regiscommerce']; }


        $requete->bindValue(':nom_client_entreprise', $_POST['nom_client_entreprise'],PDO::PARAM_STR);
        $requete->bindValue(':adresse_client_entreprise', $_POST['adresse_client_entreprise'],PDO::PARAM_STR);
        $requete->bindValue(':telephone_client_entreprise', $_POST['tel_client_entreprise'],PDO::PARAM_STR);
        $requete->bindValue(':email_client_entreprise', $_POST['email_client_entreprise'],PDO::PARAM_STR);
        $requete->bindValue(':ninea', $_POST['ninea'],PDO::PARAM_STR);
        $requete->bindValue(':regiscommerce', $_POST['regiscommerce'],PDO::PARAM_STR);

        $requete->execute();

        echo 'client ajouté avec succès !';