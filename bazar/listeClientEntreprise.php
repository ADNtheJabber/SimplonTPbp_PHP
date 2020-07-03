<?php
    require 'connexion.php';

    //select client entreprise req
    $requete = $conn->prepare('SELECT * FROM client_entreprise');

    $selectIsOk = $requete->execute();

    $clientsEntreprise = $requete->fetchAll();
    
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="styleResponse.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <title>Liste des clients</title>
</head>
<body>
<h1>Liste des Clients Entreprises</h1>

    <ul>
        <table>
            <th>nom</th>
            <th>adresse</th>
            <th>telephone</th>
            <th>email</th>
                       
        <?php foreach ($clientsEntreprise as $clients): ?>
            <tr>
                
                <td><?= $clients['nom_entreprise']?></td>
                <td><?= $clients['adresse']?></td>
                <td><?= $clients['tel']?></td>
                <td><?= $clients['email']?></td>

            </tr>
       
        <?php endforeach; ?>

        </table>
    </ul>
    
</body>
</html>