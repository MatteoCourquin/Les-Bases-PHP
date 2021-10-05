<form action="" method="POST">

    <label>Pseudo : <input type="text" name="pseudo" placeholder="Pseudo"></label>
    <label>Commentaire : <input type="text" name="commentaire" placeholder="Votre commentaire"></label>

    <input type="submit" value="Envoyez">

</form>

<?php

$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_POST['pseudo']) AND isset($_POST['commentaire'])) {
    $requete = $bdd->prepare("INSERT INTO minichat (pseudo, commentaire, date_creation) VALUES ('$_POST[pseudo]', '$_POST[commentaire]', NOW())");
    // $date = 'date_creation';
    $requete -> execute();
};



$requete = $bdd->prepare('SELECT UPPER(pseudo) AS pseudo_majuscule, commentaire, date_creation FROM minichat WHERE 1 ORDER BY ID DESC LIMIT 10');
$requete ->execute();

// print_r($requete);

while ($chat = $requete->fetch()) {
    echo '<p><strong>' . htmlspecialchars($chat['pseudo_majuscule']) . '</strong> - ' . htmlspecialchars($chat['commentaire']) . ' - ' . $chat['date_creation'] . '</p>';
};









?>