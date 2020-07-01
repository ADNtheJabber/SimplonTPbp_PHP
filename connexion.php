<?php
    $servername = "localhost";
    $dbname = "banquepopulaire";
    $username = "root";
    $password = "";

    var_dump($_POST);

    try {
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Connexion reussie";

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


//client entreprise req
$requete=$conn->prepare('INSERT INTO client_entreprise VALUES (NULL, :nom, :adresse, :tel, :email, :ninea, :regiscommerce)');


if (isset($_POST['nomEntreprise'])) { $nom = $_POST['nomEntreprise']; }
if (isset($_POST['adresseEntreprise'])) { $adresse = $_POST['adresseEntreprise']; }
if (isset($_POST['telEntreprise'])) { $tel = $_POST['telEntreprise']; }
if (isset($_POST['emailEntreprise'])) { $email = $_POST['emailEntreprise']; }
if (isset($_POST['ninea'])) { $salaire = $_POST['ninea']; }
if (isset($_POST['regiscommerce'])) { $profession = $_POST['regiscommerce']; }


$requete->bindValue(':nom', $_POST['nomEntreprise'],PDO::PARAM_STR);
$requete->bindValue(':adresse', $_POST['adresseEntreprise'],PDO::PARAM_STR);
$requete->bindValue(':tel', $_POST['telEntreprise'],PDO::PARAM_STR);
$requete->bindValue(':email', $_POST['emailEntreprise'],PDO::PARAM_STR);
$requete->bindValue(':ninea', $_POST['ninea'],PDO::PARAM_STR);
$requete->bindValue(':regiscommerce', $_POST['regiscommerce'],PDO::PARAM_STR);

$IsInsertOK = $requete->execute();

if ($IsInsertOK) {
    echo 'Client ajouté avec succès !';
} else {
    echo 'Echec de l\'insertion';
}

    } 
    catch (PDOException $e) {

        echo "Echec de la connexion : ".$e->getMessage();
    }  
