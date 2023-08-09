<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Générateur de mot de passe</h1>
    <form action="listPassword.php" method="POST">
        Combien de mot de passe ? : <input type="number" name="nbrPasswd" min="1" max="50" value="1">
        <br>
        La taille du mot de passe ? : <input type="number" name="nbrCaract" min="1" max="50" value="10">
        <br>
        Type de mot de passe : <select name="typePasswd" id="">
            <option value="1">Chiffres uniquement</option>
            <option value="2">Lettres uniquement</option>
            <option value="3">Chiffres et lettres</option>
            <option value="4">Tout caractères</option>
        </select>
        <br>
        <input type="submit" value="Générer" class="btn">
    </form>

    
</body>
</html>