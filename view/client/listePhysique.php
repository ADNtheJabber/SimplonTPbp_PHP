<?php
    use model\dbConnect\DbAccess;
    //select client Physique req
    $connexion = new DbAccess();
       
    $conn = $connexion->getConnex();
      
    return $conn->exec("SELECT * FROM `client_Physique`");

    $clientsPhysique = $sql->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="ADN"/>
    <meta name="description" content="Projet BP: adaptation PHP-JS"/>
    <link rel="stylesheet" href="public/css/styleOld.css"/>

    <title>Liste des clients</title>
</head>
<body>

    <header>
<!--logo et nom banque-->
        <div class="logo">
            <img src="public/img/bplogo.png" alt="logo BP"/>
            <h2>Banque du Peuple</h2>
        </div>
<!--end of logo et nom banque-->

<!--nav-->               
        <nav>
            <ul>
                <li><a href="accueil">Accueil</a></li>
                <li><a href="ajoutClient">Ajouter client</a></li>
                <li><a href="ajoutCompte">Ajouter compte</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Listes des clients</a>
                    <div class="dropdown-content">
                      <a href="listePhysique">Liste Clients Particuliers</a>
                      <a href="listeMoral">Liste Clients Entreprises</a>
                    </div>
                </li>
                <li><a href="#">Virement</a></li>
                <li><a href="#">Assistance</a></li>
            </ul>
       </nav>
<!--end of nav-->  
        
    </header>

<h1>Liste des Clients Physiques</h1>

    <ul>
        <table>
            <th>nom</th>
            <th>prenom</th>
            <th>telephone</th>
            <th>email</th>
                       
        <?php foreach ($clientsPhysique as $clients): ?>
            <tr>
                
                <td><?= $clients['nom]']?></td>
                <td><?= $clients['prenom']?></td>
                <td><?= $clients['tel']?></td>
                <td><?= $clients['email']?></td>

            </tr>
       
        <?php endforeach; ?>

        </table>
    </ul>
    
</body>
</html>