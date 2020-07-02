<?php
    require 'connexion.php';
   // require 'creationCompte.html';

    //ajout compte req
    $requete = $conn->prepare('INSERT INTO compte (idCompte, numcompte, type_compte, fraisOuverture, remuAnnuelle, dateDeblocage, depotInitialCC, id_client_physique, id_client_entreprise) 
                            VALUES (NULL, :numCompte, :typeCompte, NULL, NULL, NULL, :depot, NULL, NULL)');

    
        if (isset($_POST['noCompteCC'])) { $numeroCompte = $_POST['noCompteCC']; }
        if (isset($_POST['typeCompteCC'])) { $typeCompte = $_POST['typeCompteCC']; }
        if (isset($_POST['depotCC'])) { $remu = $_POST['depotCC']; }
            

        $requete->bindValue(':numCompte', $_POST['noCompteCC'], PDO::PARAM_STR);
        $requete->bindValue(':typeCompte', $_POST['typeCompteCC'], PDO::PARAM_STR);
        $requete->bindValue(':depot', $_POST['depotCC'], PDO::PARAM_STR);
               

        $IsInsertOK = $requete->execute();

        $messageOk = 'Compte ajouté avec succès !';
        
        $messageNo = 'Echec de l\'insertion';


//req ajout agios
        $requeteAgios = $conn->prepare('INSERT INTO agioscc (idAgiosCC	descriptionAgios	montantAgios	numcompte)
                            VALUES (NULL, :descript, :montant, :numCompte)');


        if (isset($_POST['description'])) { $descript = $_POST['description']; }
        if (isset($_POST['montantAgios'])) { $montant = $_POST['montantAgios']; }
        if (isset($_POST['noCompteCC'])) { $numeroCompte = $_POST['noCompteCC']; }


        $requeteAgios->bindValue(':descript', $_POST['description'], PDO::PARAM_STR);
        $requeteAgios->bindValue(':montant', $_POST['montantAgios'], PDO::PARAM_DOUBLE);
        $requeteAgios->bindValue(':numCompte', $_POST['noCompteCC'], PDO::PARAM_STR);
        

        $isAgiosADD = $requeteAgios->execute();

        $agiosADDok = 'les Agios ont été également ajouté !';

        $agiosADDno = 'les Agios n\'ont pas été  ajouté !';


        
       
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

<h1>Ajout Compte Courant</h1>

<? if ($IsInsertOK): ?>
  <p class="messageOk"> <? echo $messageOk ?></p>
  <p class="agiosADDok"> <? echo $agiosADDok ?></p>


<? else: ?>
  <p class="messageNo"><? echo $messageNo ?></p>
  <p class="agiosADDno"> <? echo $agiosADDno ?></p>

<? endif; ?>
    
</body>
</html>