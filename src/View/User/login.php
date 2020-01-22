<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost/PiePHP/login/done" method="post">
        <div style="float: left; margin-left: 40px;  margin-top: 30px;">
            <h2>Connexion</h2>
            <p>Entrer un email
                <input type="text" name="log_email" maxlength="250">
            </p>
            <p>Entrer un Mot de passe
                <input type="password"name="mdp" maxlength="10" id="mdp">
            </p>
                        <p>
            <input type="reset" name="Reset" id="button" value="Annuler" />
            <input name="Cr&eacute;er" type="submit" value="Connexion" />
            </p>
        </div>
    </form>
</body>
</html>