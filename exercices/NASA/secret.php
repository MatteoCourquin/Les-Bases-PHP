<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret</title>
</head>
<body>

<?php 

if (isset($_POST['mot-de-passe']) AND $_POST['mot-de-passe'] == 'kangourou') {
    echo '<p>Voici les codes secrets : DFG276D%S+CQ*ZEF</p>';
}elseif ($_POST['mot-de-passe'] != 'kangourou') {
    echo 'Mot de passe incorrect';
};


?>
    
</body>
</html>