<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de création de Compte</title>
</head>
<body>

    
</body>
</html>               
               
               
               <form action="compteController" method="POST" class="myFormCompte" id="formCompte">
                        
                    <fieldset>

                        <legend>Informations du Compte </legend>

                            <label for="typeCompte" id="TypeCompte">Type de compte: </label>
                            <select id="compte" name="choixCompte">
                                <option value="Courant">compte Courant</option>
                                <option value="Epargne">compte Epargne</option>
                                <option value="Bloque">compte Bloqué</option>
                            </select>

                            <label for="numeroCompte" id="numeroCompte">Numero de compte: </label>
                            <input type="text" id="numeroCompte" name="noCompte" placeholder="numero de compte"/><br>
                            <span id="numCompte_error"></span><br>
                                                     
                            <label for="agios" id="labelAgiosCC">Agios Trimestrielle:</label>
                            <input type="text" id="agiosCC" name="agiosCC" placeholder="agios tous les 03 mois"/><br>
                            <span id="agios_error"></span><br>

                            <label for="depotInitial" id="labelDepotInitialCC">Montant du dépot initial:</label>
                            <input type="text" id="depotInitialCC" name="depotCC" placeholder="depot initial à la creation"/><br>
                            <span id="depotInit_error"></span><br>
                         
                    </fieldset>

                    <div class="btns" id="boutons_formCompte">
                        <input type="submit" id="submitCompte" value="Enregistrer"/>
                        <input type="reset" id="reset" value="Annuler"/>
                    </div>

                </form>

                <form action="ajoutCompteBloque.php" method="POST" class="myFormCompteBloque" id="compteBloque">
                        
                    <fieldset>

                        <legend>Informations: Compte Bloqué</legend>

                            <label for="numeroCompte" id="numeroCompte">Numero de compte: </label>
                            <input type="text" id="numeroCompte" name="noCompteCB" placeholder="numero de compte"/><br>
                            <span id="numCompte_error"></span><br>

                            <label for="typeCompte" id="TypeCompte">Type de compte: </label>
                            <select name="typeCompteCB" id="compte">
                                <option value="CompteEpargne">Compte Epargne</option>
                            </select>
                         
                            <label for="fraisOuvCB" id="labelFraisOuvCB">Frais d'Ouverture:</label>
                            <input type="text" id="fraisOuvCB" name="fraisOuvCB" placeholder="frais d'ouverture"/><br>
                            <span id="fraisOuv_error"></span><br>

                            <label for="remunAnnuelle" id="labelRemunAnnuelleCB">Montant Remuneration Annuelle:</label>
                            <input type="text" id="remunAnnuelleCB" name="remuCB" placeholder="remuneration annuelle"/><br>
                            <span id="remun_error"></span><br>
                            
                            <label for="dateDeblocage" id="labelDateDeblocageCB">Date de RéOuverture:</label>
                            <input type="date" id="dateDeblocage" name="dateDeblocage" placeholder="date de reouverture"/><br>
                            
                    </fieldset>

                    <div class="btns" id="boutons_formCompte">
                        <input type="submit" id="submitCompte" value="Enregistrer"/>
                        <input type="reset" id="reset" value="Annuler"/>
                    </div>

                </form>

                <form action="ajoutCompte.php" method="POST" class="myFormCompteEpargne" id="compteEpargne">
                        
                    <fieldset>
                        <legend>Informations: Compte Epargne - Simpe et Xewël</legend>

                            <label for="numeroCompte" id="numeroCompte">Numero de compte: </label>
                            <input type="text" id="numeroCompte" name="noCompteCE" placeholder="numero de compte"/><br>
                            <span id="numCompte_error"></span><br>

                            <label for="typeCompte" id="TypeCompte">Type de compte: </label>
                            <select name="typeCompteCE" id="compte">
                                <option value="CompteEpargne">Compte Epargne</option>
                            </select>
                            <span id="typeCompte_error"></span><br>
                         
                            <label for="fraisOuv" id="labelFraisOuvCE">Frais d'Ouverture:</label>
                            <input type="text" id="fraisOuvCE" name="fraisOuvCE" placeholder="frais d'ouverture"/><br>

                            <label for="remunAnnuelle" id="labelRemunAnnuelleCE">Montant Remuneration Annuelle:</label>
                            <input type="text" id="remunAnnuelleCE" name="remuCE" placeholder="remuneration annuelle"/><br>

                    </fieldset>

                    <div class="btns" id="boutons_formCompte">
                        <input type="submit" id="submitCompte" value="Enregistrer"/>
                        <input type="reset" id="reset" value="Annuler"/>
                    </div>

                </form>