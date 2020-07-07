<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="ADN"/>
    <meta name="description" content="Projet BP: adaptation PHP-JS"/>
    <link rel="stylesheet" href="public/css/styleOld.css"/>

    <title>Formulaire de création de Compte</title>
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
 
               <div class="compteForm">

               <form action="compteController" method="POST" class="myFormCompte" id="formCompte">
                        
                        <fieldset>
    
                            <legend>Informations du Compte </legend>
    
                                <label for="typeCompte" id="TypeCompte">Type de compte: </label>
    
                                <input type="radio" id="courant" name="compte" value="courant">
                                <label for="courant">Compte Courant</label><br>
    
                                <input type="radio" id="epargne" name="compte" value="epargne">
                                <label for="epargne">Compte Epargne</label><br>
    
                                <input type="radio" id="bloque" name="compte" value="bloque">
                                <label for="bloque">Compte Bloque</label><br>
    
                                <label for="numeroCompte" id="numeroCompte">Numero de compte: </label>
                                <input type="text" id="numeroCompte" name="noCompte" placeholder="numero de compte"/><br>
                                <span id="numCompte_error"></span><br>
    
                                <label for="fraisOuv" id="labelFraisOuv">Frais d'Ouverture:</label>
                                <input type="text" id="fraisOuv" name="fraisOuv" placeholder="frais d'ouverture"/><br>
                                <span id="fraisOuv_error"></span><br>
                                                         
                                <label for="remunAnnuelle" id="labelRemunAnnuelle">Montant Remuneration Annuelle:</label>
                                <input type="text" id="remunAnnuelle" name="remu" placeholder="remuneration annuelle"/><br>
                                <span id="remun_error"></span><br>
    
                                <label for="agios" id="labelAgiosCC">Agios Trimestrielle:</label>
                                <input type="text" id="agiosCC" name="agiosCC" placeholder="agios tous les 03 mois"/><br>
                                <span id="agios_error"></span><br>
    
                                <label for="depotInitial" id="labelDepotInitialCC">Montant du dépot initial:</label>
                                <input type="text" id="depotInitialCC" name="depotCC" placeholder="depot initial à la creation"/><br>
                                <span id="depotInit_error"></span><br>
    
                                <label for="dateDeblocage" id="labelDateDeblocage">Date de RéOuverture:</label>
                                <input type="date" id="dateDeblocage" name="dateDeblocage" placeholder="date de reouverture"/><br>
                                <span id="date_error"></span><br>
                             
                        </fieldset>
    
                        <div class="btns" id="boutons_formCompte">
                            <input type="submit" id="submitCompte" value="Enregistrer"/>
                            <input type="reset" id="reset" value="Annuler"/>
                        </div>

               </div>
               

    <script src="public/js/scriptCompte.js"></script>         
</body>
</html>  