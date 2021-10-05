<!-- UTILISER LES BASES DE DONNÉES -->

<?php 

// DÉCLARATION D'UNE BASE DE DONNÉES :
// host = server | dbname = nom de la base de donnée | root = id | root = mot de passe | array... = affichage des messages d'erreurs
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


// RÉCUPÉRER DES DONNÉES
// Quand on sait ce que l'on veut récupérer
// Je selectionne (SELECT) * = tout [...], dans ma table (FROM) [...], dans les entrées (WHERE) [...], dans l'ordre (ORDER BY) DESC = décroissant [...], de 0 a 20 (LIMIT) [...];
$reponse = $bdd->query('SELECT console, nom, prix FROM jeux_video WHERE console="NES" OR console="PC" ORDER BY prix DESC LIMIT 0, 20');

// pour toutes les $donnees : 
while ($donnees = $reponse->fetch()) {
    // j'affiche le nom et la console
    echo '<p>' . $donnees['nom'] . ' - ' . $donnees['console'] . '</p>';
}

echo ('<hr>');

if (isset($_GET['console'])) {

    // Quand on ne sait pas ce que l'on veut récupérer
    // Je met un "?" pour spécifier que je ne sais pas encore ce que je veux séléctionner
    // Et a la place de "query" je met "prepare"
    $requete = $bdd->prepare('SELECT console, nom, prix FROM jeux_video WHERE console = ? ORDER BY prix DESC LIMIT 0, 20');
    $requete ->execute(array($_GET['console']));
    // pour $_GET écrire dans l'url ?console=... NES/PC/Xbox... etc
    
    // pour toutes les $donnees : 
    while ($donnees = $requete->fetch()) {
        // j'affiche le nom et la console
        echo '<p>' . $donnees['nom'] . ' - ' . $donnees['console'] . '</p>';
    }
}else {
    echo 'Vous n\'avez pas fait de requete';
}
?>










<hr>

<h1>Zone exercices</h1>

<!-- EXERCICE PERSO -->

<?php if (!isset($_GET['console'])){ ?>

<form action=" " method="GET">
    
    <label>Quelle console voulez vous voir ? <input type="text" name="console" placeholder="Console"></label>
    <input type="submit" value="Valider" />
    
</form>

<?php }elseif (isset($_GET['console'])){   

    while ($donnees = $requete->fetch()) {
        // j'affiche le nom et la console
        echo '<p>' . $donnees['nom'] . ' - ' . $donnees['console'] . '</p>';
    }
}; ?>