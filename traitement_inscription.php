<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $email = htmlspecialchars($_POST["email"]);
    $mot_de_passe = htmlspecialchars($_POST["mot_de_passe"]);
    $ville = $_POST['ville'];
    if(isset($_POST['vendeur']))
    {
        $vendeur = 'oui';
    }
    else{
        $vendeur = 'non';
    }

    
    // Validation des données (à adapter selon vos besoins)
    if (empty($nom) || empty($prenom) || empty($email) || empty($mot_de_passe) || empty($ville)) {
        echo "Tous les champs doivent être remplis.";
    } else {
        // Traitement des données (par exemple, enregistrement dans une base de données)
        
        // Connexion à la base de données (à remplacer avec vos paramètres de connexion)
        $connexion = new mysqli("localhost", "root", "", "vente_de_lapin");

        // Vérifier la connexion
        if ($connexion->connect_error) {
            die("Échec de la connexion à la base de données: " . $connexion->connect_error);
        }
        
        // Préparer la requête SQL pour insérer les données dans la table Utilisateurs
        $requete = $connexion->prepare("INSERT INTO utilisateurs (nom, prenoms, email, mot_de_passe, ville,vendeur ) VALUES (?, ?, ?, ?, ?, ?)");
        
        // Hacher le mot de passe avant de l'insérer dans la base de données (utiliser la fonction de hachage appropriée, par exemple password_hash pour bcrypt)
        $mot_de_passe_hash = sha1($mot_de_passe);
        
        // Binder les paramètres à la requête
        $requete->bind_param("ssssss",$nom, $prenom, $email, $mot_de_passe_hash, $ville, $vendeur);
        
        // Exécuter la requête
        if ($requete->execute() === TRUE) {
            echo "Inscription réussie. Vous pouvez maintenant vous connecter.";
        } else {
            echo "Erreur lors de l'inscription: " . $connexion->error;
        }
        
        // Fermer la connexion et la requête
        $requete->close();
        $connexion->close();
        header('Location: connexion.php');
    }
}
?>