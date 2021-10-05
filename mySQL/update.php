
<form action=" " method="POST">
    
    <label>Quelle nom <input type="text" name="nom" placeholder="Nom"></label>
    
    <label>Quelle possesseur <input type="text" name="possesseur" placeholder="Possesseur"></label>
    
    <input type="submit" value="Valider" />

</form>

<?php

$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_POST['nom']) AND isset($_POST['possesseur'])) {
    $requete = $bdd->prepare('UPDATE jeux_video SET nom=?, possesseur=? WHERE ID="51"');
    $requete -> execute(array($_POST['nom'], $_POST['possesseur']));
}else{
    echo 'Vous n\'avez demandé aucun changement';
}



// $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// $requete = $bdd->prepare('UPDATE jeux_video SET nom="Matteo", possesseur="Courquin" WHERE ID="51"');
// $requete -> execute();

?>