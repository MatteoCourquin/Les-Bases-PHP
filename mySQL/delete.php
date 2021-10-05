
<form action=" " method="POST">
    
    <label>Quelle ID voulez vous supprimer ? <input type="text" name="ID" placeholder="ID"></label>
    
    <input type="submit" value="Valider" />

</form>

<?php

$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_POST['ID'])) {
    $requete = $bdd->prepare('DELETE FROM jeux_video WHERE ID=?');
    $requete -> execute(array($_POST['ID']));
}else{
    echo 'Vous n\'avez demandé aucun changement';
}



// $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// $requete = $bdd->prepare('UPDATE jeux_video SET nom="Matteo", possesseur="Courquin" WHERE ID="51"');
// $requete -> execute();

?>