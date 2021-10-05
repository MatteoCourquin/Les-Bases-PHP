<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>

    <?php if (!isset($_POST['mot-de-passe']) OR $_POST['mot-de-passe'] != 'kangourou'){ ?>

    <form action="./formulaires.php" method="POST">
        
        <label>Mot de passe : <input type="password" name="mot-de-passe" placeholder=" ••••••"></label>
        <input type="submit" value="Valider" />
        
    </form>

    <?php }elseif (isset($_POST['mot-de-passe']) AND $_POST['mot-de-passe'] == 'kangourou') {   
        echo '<p>Voici les codes secrets : DFG276D%S+CQ*ZEF</p>';
    }; ?>

</body>
</html>