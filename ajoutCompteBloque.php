<?php
    require 'connexion.php';
    require 'creationCompte.html';

    //ajout compte req
    $requete = $conn->prepare('INSERT INTO compte (idCompte, numcompte, type_compte, fraisOuverture, remuAnnuelle, dateDeblocage, depotInitialCC, id_client_physique, id_client_entreprise) 
                            VALUES (NULL, :numCompte, :typeCompte, :frais, :remu, :deblocage, NULL, NULL, NULL)');

        if (isset($_POST['noCompteCB'])) { $numeroCompte = $_POST['noCompteCB']; }
        if (isset($_POST['typeCompteCB'])) { $typeCompte = $_POST['typeCompteCB']; }
        if (isset($_POST['fraisOuvCB'])) { $frais = $_POST['fraisOuvCB']; }
        if (isset($_POST['remuCB'])) { $remu = $_POST['remuCB']; }
        if (isset($_POST['dateDeblocage'])) { $deblocage = $_POST['dateDeblocage']; }
    

        $requete->bindValue(':numCompte', $numeroCompte, PDO::PARAM_STR);
        $requete->bindValue(':typeCompte', $typeCompte, PDO::PARAM_STR);
        $requete->bindValue(':frais', $frais,PDO::PARAM_DOUBLE);
        $requete->bindValue(':remu', $remu, PDO::PARAM_DOUBLE);
        $requete->bindValue(':deblocage', $deblocage,PDO::PARAM_DATE);
        

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
<h1>Ajout Compte Bloque</h1>
<? if ($IsInsertOK): ?>
  <p class="messageOk"> <? echo $messageOk; ?></p>

<? else: ?>
  <p class="messageNo"><? echo $messageNo;?></p>
<? endif; ?>
    
</body>
</html>