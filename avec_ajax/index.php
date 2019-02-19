<!DOCTYPE html>
<html lang="fr">
<script src="controllers/main.js" type="text/javascript"></script>

<head>
    <meta charset="UTF-8">
    <title>AJAX EXERCICES</title>
</head>

<body>
  <table>
    <label>Recherche :</label>
        <br>
        <form action="index.php" method="GET">
            <input type="text" id="text" name="prenom" onkeydown="search(this.value)">
        </form>
        <section id="retour">

        </section>

        <tr>
            <th>Nom</th>
            <th>Prénom</th>
        </tr>

    </table>
</body>

</html>