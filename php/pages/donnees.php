<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matteo Courquin</title>
</head>
<body>

<?php

    // Je verifie que mes valeurs existent
    if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['age'])) {
            // Si elles existent, j'affiche :
            echo '<p>Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' tu as ' . $_GET['age'] . '</p>';
        }else{ // sinon j'affiche mon message d'erreur :
            echo 'Utilisateur non défini';
        };

        // Je vérifie que le nombre de repetitions est bien un integer
        $nbrRepetitions = (int) $_GET['repetition'];

        // Si le nombre de répétition est inférieur ou égale a 100 ET que le nombre de répétition n'est pas égale a 0 et que "repetition" existe bien
        if ($nbrRepetitions <= 100 AND $nbrRepetitions != 0 AND isset($_GET['repetition'])) {
            // alors je lance ma boucle for
            for ($i=0; $i <= $_GET['repetition']; $i++) 
            // je donne une valeur a (i) | tant que repetition est inferieur a (i) | j'incrémente (i) a chaque tour
            { 
                // a chaque tour j'execute :
                echo '<p>hello</p>';
            };
        }else{ 
            // Sinon j'affiche un message d'erreur
            echo 'La valeur est nulle ou elle est supérieur a 100';
        };

?>
    
</body>
</html>