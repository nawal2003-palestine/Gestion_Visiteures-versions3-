<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des Visiteurs</title>
</head>
<body>
    <?php
    include_once 'Visiteur.php';
    $visiteurs = Lister();
    ?>
    <center>
        <h2>Liste des Visiteurs :</h2>
        <table border='1'>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th colspan="2">Actions</th>
            </tr>
            <?php foreach ($visiteurs as $visiteur): ?>
            <tr>
                <td><?= $visiteur['ID']; ?></td>
                <td><?= $visiteur['NOM']; ?></td>
                <td><?= $visiteur['PRENOM']; ?></td>
                <td><?= $visiteur['EMAIL']; ?></td>
                <td>
                    <a href="editer.php?id=<?= $visiteur['ID']; ?>">Modifier</a>
                    <a href="supprimer.php?id=<?= $visiteur['ID']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce visiteur ?');">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <br>
        <a href="saisie.php">>> Ajouter un visiteur</a>
    </center>
</body>
</html>
