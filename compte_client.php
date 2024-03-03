<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord du compte client</title>
    <link rel="stylesheet" href="style_client.css">
</head>
<body>
    <header>
        <h1>Vente de Lapins en Ligne</h1>
        <nav>
            <ul>
                <li><a href="acceuil.php">Accueil</a></li>
                <!-- Ajoutez d'autres liens de navigation ici -->
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="actions">
            <?php  echo 'Bienvenu '.$_SESSION['nom'].' '.$_SESSION['prenom'];?>
            <h2>Actions du client</h2>
            <ul>
                <li><a href="profil_ajour.php">Mettre à jour mon profil</a></li>
                <li><a href="commande_lapin.php">Commander des lapins</a></li>
                <!-- Autres actions du client -->
            </ul>
        </div>
        <div class="stats">
            <h2>Statistiques du compte</h2>
            <div class="orders-made">
                <h3>Nombre de commandes effectuées</h3>
                <!-- Contenu dynamique -->
            </div>
            <div class="orders-received">
                <h3>Nombre de commandes déjà reçues</h3>
                <!-- Contenu dynamique -->
            </div>
            <div class="orders-not-received">
                <h3>Nombre de commandes non reçues</h3>
                <!-- Contenu dynamique -->
            </div>
        </div>
    </div>
</body>
</html>