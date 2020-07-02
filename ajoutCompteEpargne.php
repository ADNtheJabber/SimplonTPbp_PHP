<?php
    require 'connexion.php';
    require 'creationCompte.html';

    //ajout compte req
    $requete = $conn->prepare('INSERT INTO compte (idCompte, numcompte, type_compte, fraisOuverture, remuAnnuelle, dateDeblocage, depotInitialCC, id_client_physique, id_client_entreprise) 
                            VALUES (NULL, :numCompte, :typeCompte, :frais, :remu, NULL, NULL, NULL, NULL)');


        if (isset($_POST['noCompteCE'])) { $numeroCompte = $_POST['noCompteCE']; }
        if (isset($_POST['typeCompteCE'])) { $typeCompte = $_POST['typeCompteCE']; }
        if (isset($_POST['fraisOuvCE'])) { $frais = $_POST['fraisOuvCE']; }
        if (isset($_POST['remuCE'])) { $remu = $_POST['remuCE']; }
            

        $requete->bindValue(':numCompte', $_POST['noCompteCE'], PDO::PARAM_STR);
        $requete->bindValue(':typeCompte', $_POST['typeCompteCE'], PDO::PARAM_STR);
        $requete->bindValue(':frais', $_POST['fraisOuvCE'],PDO::PARAM_STR);
        $requete->bindValue(':remu', $_POST['remuCE'], PDO::PARAM_STR);
        
        

        $IsInsertOK = $requete->execute();

        $messageOk = 'Compte ajouté avec succès !';
        
        $messageNo = 'Echec de l\'insertion';
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="styleResponse.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <title>Ajout de Compte</title>
</head>
<body>
<h1>Ajout Compte Epargne</h1>
<? if ($IsInsertOK): ?>
  <p class="messageOk"> <? echo $messageOk; ?></p>

<? else: ?>
  <p class="messageNo"><? echo $messageNo;?></p>
<? endif; ?>
    
</body>
</html>