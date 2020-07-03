<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="author" content="Ababacar Diene Ndiaye"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="public/css/style.css"/>
    <title>Accueil BP</title>
</head>
<body>

    <header>
        <img src="public/img/bplogo.png" alt="logobp"/>
        <h1>Banque du Peuple</h1>
        <p>Encore plus proche de vous !</p>
    </header>


    <div class="content">

        <form action="loginController" method="post">

            <h3>Connexion</h3>

            <label for="worker">Poste: </label>
            <select name="postChoice" id="post">
                <option value="Administrateur">Administrateur</option>
                <option value="Caissière">Caissière</option>
                <option value="Responsable">Responsable de Compte</option>
            </select><br>

            <label for="login">Login: </label>
            <input type="text" name="login" id="login"/><br>

            <label for="mdp">Mot de passe: </label>
            <input type="password" name="pwd" id="password"/><br>

            <input type="submit" value="Se connecter" id="submitLog"/>
            <input type="reset" value="Annuler" id="resetLog"/><br>

            <p class="forgotPassword">Mot de passe oublié !, <a href="forgotPasswordController" target="_blank">Cliquez-ici.</a></p>


        </form>
        


    </div>
    



    <script src="public/js/script.js"></script>
</body>
</html>