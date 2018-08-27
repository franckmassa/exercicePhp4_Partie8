<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Exercice4</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />  
    </head>
    <body>
        <div class="d-inline-block bg-info m-5 p-5" style="border: 5px double red; font-size: 30px;">
            <p>
                <!-- Formulaire utilisant la méthode POST pour  récupérer les données dans la page cookies.php -->
            <form action="cookies.php" method="POST" style="background-color: yellow; display: inline-block;" >
                <p><label for="login">Identifiant <input type="text" name="login" id="login"/></p>
                <p><label for="password">Mot de passe <input type="password" name="password" id="password"/></p>
                <button type="submit" name="validate">Valider</button>
            </form>
        </p> 
    </div>       
</body>
</html>
