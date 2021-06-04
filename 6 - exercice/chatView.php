<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Voici la liste des chats en base de données : </h2>

    <ul>
        <?php foreach ($chats as $chat) : ?>
            <li><?php echo $chat->getNom(); ?></li>
        <?php endforeach; ?>
    </ul>

    <h3>Enregistrez un nouveau chat : </h3>

    <form action="" method="POST">
        <label for="nom">Nom du chat</label><br>
        <input type="text" name="nom"><br>

        <label for="age">Son age</label><br>
        <input type="number" name="age"><br>

        <label for="sexe">Sexe (m ou f)</label><br>
        <input type="text" name="sexe"><br>

        <label for="couleur">Sa couleur</label><br>
        <input type="text" name="couleur"><br>

        <input type="submit" name="addChat" value="Envoyez"><br>
    </form>
</body>
</html>