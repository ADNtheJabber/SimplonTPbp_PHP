<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="ADN"/>
    <meta name="description" content="Projet BP: adaptation PHP"/>
    <link rel="stylesheet" href="public/css/styleOld.css"/>

    <title>Accueil Responsable de Compte</title>
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
                <li><a href="index">Accueil</a></li>
                <li><a href="ajoutClient">Ajouter client</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Listes des clients</a>
                    <div class="dropdown-content">
                      <a href="listePhysiqueController">Liste Clients Particuliers</a>
                      <a href="listeMoralController">Liste Clients Entreprises</a>
                    </div>
                </li>
                <li><a href="#">Virement</a></li>
                <li><a href="#">Assistance</a></li>
            </ul>
       </nav>
<!--end of nav-->  
        
    </header>


    <h1>Donnees de l'employe a afficher ici</h1>

    <script src="scriptbp.js"></script>

</body>
</html>
   