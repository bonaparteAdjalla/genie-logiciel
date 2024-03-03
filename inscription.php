<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style_inscription.css">
</head>
<body>
    <header>
        <h1>Inscription</h1>
        <nav>
            <ul>
                <li><a href="acceuil.php">Accueil</a></li>
                <li><a href="connexion.php">Se Connecter</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="traitement_inscription.php" method="post">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required><br><br>
            <label for="prenom">Prénoms:</label>
            <input type="text" id="prenom" name="prenom" required><br><br>
            <label for="ville">ville/quartier:</label>
            <input type="text" id="ville" name="ville" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="mot_de_passe">Mot de passe:</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" required><br><br>
            <label for="confirmation_mot_de_passe">Confirmer le mot de passe:</label>
            <input type="password" id="confirmation_mot_de_passe" name="confirmation_mot_de_passe" required><br><br>
            <label for="vendeur">vendeur</label>
            <input type="checkbox" id="vendeur" name = "vendeur">
            <input type="submit" value="Inscrire">
        </form>
    </main>
    <footer>
        <!-- Pied de page -->
    </footer>
</body>
</html>