<?php
    require 'connexion.php';
    require 'creationCompte.html';
    

//client entreprise req
$requete=$conn->prepare('INSERT INTO client_entreprise VALUES (NULL, :nom, :adresse, :tel, :email, :ninea, :regiscommerce)');


if (isset($_POST['nomEntreprise'])) { $nom = $_POST['nomEntreprise']; }
if (isset($_POST['adresseEntreprise'])) { $adresse = $_POST['adresseEntreprise']; }
if (isset($_POST['telEntreprise'])) { $tel = $_POST['telEntreprise']; }
if (isset($_POST['emailEntreprise'])) { $email = $_POST['emailEntreprise']; }
if (isset($_POST['ninea'])) { $ninea = $_POST['ninea']; }
if (isset($_POST['regiscommerce'])) { $regiscommerce = $_POST['regiscommerce']; }


$requete->bindValue(':nom', $nom, PDO::PARAM_STR);
$requete->bindValue(':adresse', $adresse, PDO::PARAM_STR);
$requete->bindValue(':tel', $tel, PDO::PARAM_STR);
$requete->bindValue(':email', $email, PDO::PARAM_STR);
$requete->bindValue(':ninea', $ninea, PDO::PARAM_STR);
$requete->bindValue(':regiscommerce', $regiscommerce, PDO::PARAM_STR);

$IsInsertOK = $requete->execute();

if ($IsInsertOK) {
    echo 'Client ajouté avec succès !';
} else {
    echo 'Echec de l\'insertion';
}

?>

