<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>support forms</title>
</head>
<body>
<form action="data.php" method="post">
    <p>
        <label for="firstname">Prénom</label>
        <input id="firstname" name="firstname" type="text"/>
    <p/>
    <p>
        <label for="lastname">Nom</label>
        <input id="lastname" name="lastname" type="text"/>
    <p/>
    <p>
        <label for="zipccode">Code postal</label>
        <input id="zipccode" name="postal" type="text"/>
    <p/>
    <p>
        <label for="city">Ville</label>
        <input id="ville" name="city" type="text"/>
    <p/>
    <h3>hobbies</h3>
        <label for="judo">Judo</label>
        <input id="judo" name="hobbies[]" value="judo" type="checkbox" />
        <label for="sewing">Couture</label>
        <input id="sewing" name="hobbies[]" value="sewing" type="checkbox" />
        <label for="sam">Sam</label>
        <input id="sam" name="hobbies[]" value="sam" type="checkbox" />
        <label for="frodon">Frodon</label>
        <input id="frodon" name="hobbies[]" value="frodon" type="checkbox" />
        <label for="bilbo">Bilbo</label>
        <input id="bilbo" name="hobbies[]" value="bilbo" type="checkbox" />
    <button id="submit" type="submit">Ajouter</button>
</form>
</body>