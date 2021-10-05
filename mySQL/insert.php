
<form action=" " method="POST">
    
    <label>Quelle nom <input type="text" name="nom" placeholder="Nom"></label>
    
    <label>Quelle possesseur <input type="text" name="possesseur" placeholder="Possesseur"></label>
    
    <input type="submit" value="Valider" />

</form>

<?php

$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_POST['nom']) AND isset($_POST['possesseur'])) {
    $requete = $bdd->prepare('INSERT INTO jeux_video (nom, possesseur) VALUES (?, ?)');
    $requete -> execute(array($_POST['nom'], $_POST['possesseur']));
}else{
    echo 'Vous n\'avez rien demandé d\'insérer';
};

// !! Attention a définir une valeur par défaut en cas de non remplissage de valeurs !!

// $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// $requete = $bdd->prepare('INSERT INTO jeux_video (nom, possesseur) VALUES ("Quentin", "Bernard")');
// $requete -> execute();

?>

