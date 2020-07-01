<?php
    require 'connexion.php';
    require 'creationCompte.html';

    
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

$IsInsertOK = $requete->execute();

if ($IsInsertOK) {
    echo 'Client ajouté avec succès !';
} else {
    echo 'Echec de l\'insertion';
}

?>

