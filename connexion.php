<!DOCTYPE html>
<html lang="en">
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion</title>
        <link rel="stylesheet" href="style_inscription.css">
    </head>
    <body>
        <header>
            <h1>Connexion</h1>
            <nav>
                <ul>
                    <li><a href="acceuil.php">Accueil</a></li>
                    <li><a href="inscription.php">S'inscrire</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="message_derreur" >
			<?php
                if(isset($_GET['erreur']))
                {
                    $erreur = $_GET['erreur'];
                    if($erreur == 1)
                        echo "<p style = 'color: red' >Tous les champs sont obligatoir</p>"; 
					if($erreur == 2)
                        echo "<p style = 'color: red' >le pseudo ou le mot de passe est incorrecte</p>";  
                }
            ?>
			</div>
            <form action="connexion_traitement.php" method="post">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                <label for="mot_de_passe">Mot de passe:</label>
                <input type="password" id="mot_de_passe" name="mot_de_passe" required><br><br>
                <input type="submit" value="Se Connecter">
            </form>
        </main>
        <footer>
            <!-- Pied de page -->
        </footer>
    </body>
    </html>