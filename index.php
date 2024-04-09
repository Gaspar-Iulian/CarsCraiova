<?php require_once($_SERVER['DOCUMENT_ROOT'].'/carscraiova/cnf.php'); ?>
<?php require_once(BASE_PATH. 'Controller/IndexController.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars Craiova</title>
</head>
<header>
    <div class="LogIn-container">
        <button class="favorite-button">Favorite</button>
        <button class="LogIn-button">Autentifica-te</button>
        <button class="register-button">Inregistreaza-te </button>
        <button class="AdaugaAnunt-button"> + Adauga Anunt </button>
    </div>
</header>
<body>
    <div class="cautare-container">
        <h1>Cautare anunt</h1>

<?php
require('filter.php'); ?>
</body>
</html>