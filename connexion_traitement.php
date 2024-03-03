<?php
    //on demmare la session
    session_start();

    try
    {
        // je vais utilisé PDO pour la connexion et les requetes
        $bdd = new PDO('mysql:host=localhost;dbname=vente_de_lapin', 'root', '');
       // echo 'connexion reussi';
    }
    catch(Exception $e)
    {
        die('erreur:'. $e->getmessage());
    }
//on recupère les donnee de la formulaire
    $mot_de_passe = htmlspecialchars($_POST['mot_de_passe']);
    $email = htmlspecialchars($_POST['email']);
    

    if(!empty($mot_de_passe) && !empty($email))
    {
        
        //on verifi si le nom et le mot de passe entré sont bien la base de donné
        $mot_de_passe = sha1($mot_de_passe);
        $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE email = ? AND mot_de_passe = ?');
        $req->execute(array($email, $mot_de_passe));
        $resulta = $req->fetch();

        if($resulta)
        {
             //on vas stocker les donneé de celui qui s'iscrit dans des sessions
            //pour pouvoir les utilisés dans les page suivant
            $_SESSION['nom'] = $resulta['nom'];
            $_SESSION['prenom'] = $resulta['prenoms'];
            if ($resulta['vendeur'] == 'oui')
            {
                //on redirige la personne vers son compte
                header('Location: compte_vendeur.php');
            }
            elseif($resulta['vendeur'] == 'non'){
                //on redirige la personne vers son compte
                header('Location: compte_client.php');
            }

        }
        else
        {
            header('Location:../vue/page/Connexion.php?erreur=2');
        }
    }
    else
    {
        header('Location:../vue/page/Connexion.php?erreur=1');
    }