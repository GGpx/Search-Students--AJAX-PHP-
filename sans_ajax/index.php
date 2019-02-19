<?php
include_once 'controllers/requeteDB.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>AJAX EXERCICES</title>
</head>

<body>
  <table>
    <label>Recherche :</label>
        <br>
        <form action="index.php" method="GET">
            <input type="text" id="text" name="prenom">
            <input id="bouton" type="submit" values="Recherche">
        </form>

        <tr>
            <th>Nom</th>
            <th>Prénom</th>
        </tr>

        <?php foreach ($students as $key => $student): ?>

            <tr>
                <td><?php echo $student['nom'] ?></td>
                <td><?php echo $student['prenom'] ?></td>
            </tr>

        <?php endforeach;?>

    </table>
</body>

</html>