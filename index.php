<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="author" content="Ababacar Diene Ndiaye"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="public/css/styleIndex.css"/>
    <title>Accueil BP</title>
</head>
<body>

    <header>
        <img src="public/img/bplogo.png" alt="logobp"/>
        <h1>Banque du Peuple</h1>
        <p>Encore plus proche de vous !</p>
    </header>

    <hr class="sepLine">


    <div class="content">

        <img class="avatar" src="public/img/mrRobot.jpg" alt="loginAvatar"/>

        <form class="loginForm" id="myLoginForm" action="loginController" method="post">

            <h1>Connexion</h1>

            <label for="worker">Poste: </label>
            <select name="postChoice" id="poste">
                <optgroup>---Choisir son Poste---</optgroup>
                <option value="Administrateur">Administrateur</option>
                <option value="Caissière">Caissière</option>
                <option value="Responsable">Responsable de Compte</option>
            </select><br>

            <label for="login">Login: </label>
            <input type="text" name="login" id="login"/><br>

            <label for="mdp">Mot de passe: </label>
            <input type="password" name="password" id="password"/><br>

            <input type="submit" value="Se connecter" id="submitLog"/>
            <input type="reset" value="Annuler" id="resetLog"/><br>

            <p class="forgotPassword"><a href="forgotPasswordController" target="_blank">Mot de passe oublié ? </a></p>


        </form>
        


    </div>
    



    <script src="public/js/script.js"></script>
</body>
</html>