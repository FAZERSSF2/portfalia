<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupération des données du formulaire
    $nom_joueur = htmlspecialchars($_POST["nom_joueur"]);
    $id_joueur = htmlspecialchars($_POST["player-id"]); // Mise à jour du nom du champ
    $email = htmlspecialchars($_POST["email"]);
    $ville = htmlspecialchars($_POST["ville"]);
    $pays = htmlspecialchars($_POST["pays"]);
    $interets = isset($_POST["interets"]) ? $_POST["interets"] : [];
    $comments = htmlspecialchars($_POST["comments"]);

    // Affichage des informations
    echo "<h1>Merci pour votre inscription, $nom_joueur !</h1>";
    echo "<p>ID de joueur : $id_joueur</p>"; // Affichage de l'ID de joueur
    echo "<p>Email : $email</p>";
    echo "<p>Ville : $ville</p>";
    echo "<p>Pays : $pays</p>";

    // Affichage des brawlers préférés
    if (!empty($interets)) {
        echo "<p>Brawlers préférés :</p>";
        echo "<ul>";
        foreach ($interets as $interet) {
            echo "<li>" . htmlspecialchars($interet) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Aucun brawler préféré sélectionné.</p>";
    }

    // Affichage du message laissé
    if (!empty($comments)) {
        echo "<p>Message : $comments</p>";
    } else {
        echo "<p>Aucun message laissé.</p>";
    }
} else {
    echo "<h1>Formulaire non soumis correctement !</h1>";
}
?>
