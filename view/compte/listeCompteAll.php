<?php
    use model\dbConnect\DbAccess;
    //select client entreprise req
    $connexion = new DbAccess();
       
    $conn = $connexion->getConnex();

    // var_dump($conn);
    // die;
    
    return $conn->exec("SELECT * FROM 'compte'");

    $compte = $sql->fetchAll();
    // var_dump($compteEntreprise);
    // die;
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="ADN"/>
    <meta name="description" content="Projet BP: adaptation PHP-JS"/>
    <link rel="stylesheet" href="public/css/styleOld.css"/>

    <title>Liste des comptes</title>
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
                    <a href="javascript:void(0)" class="dropbtn">Listes des compte$compte</a>
                    <div class="dropdown-content">
                      <a href="listePhysique">Liste compte$compte Particuliers</a>
                      <a href="listeMoral">Liste compte$compte Entreprises</a>
                    </div>
                </li>
                <li><a href="#">Virement</a></li>
                <li><a href="#">Assistance</a></li>
            </ul>
       </nav>
<!--end of nav-->  
        
    </header>
<h1>Liste des Comptes</h1>

    <ul>
        <table>
            <th>id</th>
            <th>numero</th>
            <th>type</th>
                                   
        <?php foreach ($comptes as $compte): ?>
            <tr>
                
                <td><?= $compte['idCompte']?></td>
                <td><?= $compte['numerocompte']?></td>
                <td><?= $compte['type_compte']?></td>

            </tr>
       
        <?php endforeach; ?>

        </table>
    </ul>
    
</body>
</html>