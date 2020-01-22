<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="register/done" method="post">
        <div style="float: left; margin-left: 25%; text-align: right; margin-top: 30px;">
            <!-- <input type="text"> -->
            <h2>Inscription</h2>
            <p>Entrer un email
                <input type="text" name="email" maxlength="250">
            </p>
            <p>Entrer un Mot de passe
                <input type="password"name="password" maxlength="10" id="mdp" pattern=".{6,}"   required title="6 caracteres minimum">
            </p>
            <p>Confirmer le mot de passe 
                <input  type="password"  name="password_confirm" id="conf_pass" pattern=".{6,}" required title="6 caracteres minimum"/>
            </p>
            <input type="submit">
        </div>
    </form>
</body>
</html>