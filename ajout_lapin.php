<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'ajout de lapin</title>
    <link rel="stylesheet" href="style_ajout_lapin.css">
</head>
<body>
    <form action="traitement.php" method="post" enctype="multipart/form-data">
        <label for="image">Photo :</label><br>
        <input type="file" id="image" name="image"><br><br>

        <label for="prix">Prix unitaire :</label><br>
        <input type="number" id="prix" name="prix" min="0" step="0.01"><br><br>

        <label for="nombres_lapins">Nombre de lapin à ajouter :</label><br>
        <input type="number" id="nombres_lapins" name="nombre_lapins" min="1" step="1"><br><br>

        <input type="submit" value="Ajouter le lapin">
    </form>
</body>
</html>