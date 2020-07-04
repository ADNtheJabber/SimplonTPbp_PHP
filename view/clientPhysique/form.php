<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="ADN"/>
    <meta name="description" content="Projet BP: adaptation PHP"/>
    <link rel="stylesheet" href="style.css"/>

    <title>creation de client</title>
</head>
<body>

    <header>
<!--logo et nom banque-->
        <div class="logo">
            <img src="img/bplogo.png" alt="logo BP"/>
            <h2>Banque du Peuple</h2>
        </div>
<!--end of logo et nom banque-->

<!--nav-->               
       <nav>
            <ul>
                <li><a href="index">Accueil</a></li>
                <li><a href="#">Ajouter client</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Listes des clients</a>
                    <div class="dropdown-content">
                      <a href="clientPhysique">Liste Clients Particuliers</a>
                      <a href="clientMoral">Liste Clients Entreprises</a>
                    </div>
                </li>
                <li><a href="#">Virement</a></li>
                <li><a href="#">Assistance</a></li>
            </ul>
       </nav>
<!--end of nav-->  
        
    </header>
    
    <form action="clientPhysique" class="myFormPhysique" method="POST" id="clientPhysique">
        
                    <div class="flexform">
        
                        <div id="form1">
        
                            <label for="nom" id="labelNom">Nom: </label><br>
                                <input type="text" id="nom_client_physique" name="nomPhysique" placeholder="Nom du client"/><br>
                                <span id="name_error"></span><br>
        
                            <label for="prenom" id="labelPrenom">Prenom: </label><br>
                                <input type="text" id="prenom_client_physique" name="prenomPhysique" placeholder="Prenom du client"/><br>
                                <span id="firstname_error"></span><br>
        
                            <label for="adresse" id="labelAdresse">Adresse: </label><br>
                                <input type="text" id="adresse_client_physique"  name="adressePhysique" placeholder="Adresse du client"/><br>
                                <span id="adress_error"></span><br>
        
                            <label for="telephone" id="labelTelephone">Telephone: </label><br>
                                <input type="text" id="tel_client_physique" name="telPhysique" placeholder="Telephone du client"/><br>
                                <span id="tel_error"></span><br>
        
                            <label for="email" id="labelEmail"></label>Email: </label><br>
                                <input type="text" id="email_client_physique" name="emailPhysique" placeholder="email du client"/><br>
                                <span id="email.error"></span><br>
            
                        </div>
            
                        <div id="form2">

                            <label for="identification" id="labelID">identification: </label><br>
                                <input type="text" id="id_client_physique" name="cni" placeholder="CNI/Passport"/><br>
                                <span id="id_error"></span><br>

                            <label for="profession" id="labelProfession">profession: </label><br>
                                <input type="text" id="profession" name="profession" placeholder="profession"/><br>
                                <span id="profession_error"></span><br>
            
                            <label for="salaire" id="labelSalaire">Salaire actuel: </label><br>
                                <input type="text" id="salaire"  name="salaire" placeholder="salaire du client"/><br>
                                <span id="salary_error"></span><br>
                                
                            <label for="info_employeur" id="labelEmployeur">Informations de l'employeur: </label><br>
                                <textarea id="infos_emp" name="infos_emp" placeholder="infos employeur"></textarea><br>
                                <span id="infos_emp_error"></span>
                                        
                        </div>
       
                    </div>
                    <div class="btns" id="boutons_formClient">
                        <input type="submit" id="submitClient" value="Enregistrer"/>
                        <input type="reset" id="reset" value="Annuler"/>
                    </div>
                </form>

            <footer>
                <p>Developped by Group One</p>
            </footer>

</body>
</html>