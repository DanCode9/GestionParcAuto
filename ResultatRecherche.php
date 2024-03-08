<?php
require_once 'Vehicule.php';
session_start();
include "Navbar.php";
$marque = $_POST['marque'];
$annee = $_POST['annee'];

if (isset($_SESSION['vehicules'])) {
    $matchingCars = array();

    foreach ($_SESSION['vehicules'] as $vehicule) {
        if ($vehicule->getMarque() === $marque && $vehicule->getAnnee() == $annee) {
            $matchingCars[] = $vehicule;
        }
    }
} else {
    $matchingCars = array();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultats Recherche</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin: 10px 0;
            font-size: 18px;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            font-size: 16px;
            display: block;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Resultats Recherche</h1>
    <p>Vehicules correspondants:</p>
    <ul>
        <?php foreach ($matchingCars as $car) : ?>
            <li>
                <?= $car->getMarque() ?> (<?= $car->getAnnee() ?>)
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="FormulaireRechercheVehicule.php">Chercher un autre vehicule</a>
</div>
</body>
</html>
