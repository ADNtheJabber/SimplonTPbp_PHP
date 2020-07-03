<?php
    require 'connexion.php';

    //select client entreprise req
    $requete = $conn->prepare('SELECT * FROM client_physique');

    $selectIsOk = $requete->execute();

    $clientsPhysique = $requete->fetchAll();
    
       
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
<h1>Liste des Clients Physiques</h1>

    <ul>
        <table>
            <th>nom</th>
            <th>prenom</th>
            <th>adresse</th>
            <th>telephone</th>
            <th>email</th>
            <th>identifiant(CNI)</th>
            
        <?php foreach ($clientsPhysique as $clients): ?>
            <tr>
                
                <td><?= $clients['nom']?></td>
                <td><?= $clients['prenom']?></td>
                <td><?= $clients['adresse']?></td>
                <td><?= $clients['telephone']?>
                <td><?= $clients['email']?></td>
                <td><?= $clients['identifiant']?></td>

            </tr>
       
        <?php endforeach; ?>

        </table>
    </ul>
    
</body>
</html>