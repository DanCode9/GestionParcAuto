<?php
include "Vehicule.php";
session_start();
include_once 'Navbar.php';

$vehicle_index = isset($_POST['vehicle_index']) ? $_POST['vehicle_index'] : null;

// Initialize ChiffresAffaire if not already set in the session
if (!isset($_SESSION['ChiffresAffaire'])) {
    $_SESSION['ChiffresAffaire'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $vehicle_index !== null) {
    $nomAcheteur = $_POST['nomAcheteur'];
    $prenomAcheteur = $_POST['prenomAcheteur'];
    $adresseAcheteur = $_POST['adresseAcheteur'];
    $TelAcheteur = $_POST['numTelAcheteur'];

    if (isset($_SESSION['vehicules'][$vehicle_index])) {
        $soldVehicle = $_SESSION['vehicules'][$vehicle_index];
        unset($_SESSION['vehicules'][$vehicle_index]);

        // Add the sale price to ChiffresAffaire
        $_SESSION['ChiffresAffaire'] += $soldVehicle->prix;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Sale Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            margin: 0;
        }

        .container {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }

        .info {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<h1>Informations voiture vendue</h1>
<div class="container">
    <div class="info">
        <?php
        if (isset($soldVehicle)) {
            echo '<h2>Voiture: </h2>';
            echo "<p>Marque: {$soldVehicle->marque}</p>";
            echo "<p>Modèle: {$soldVehicle->modele}</p>";
            echo "<p>Nom de l'acheteur: $prenomAcheteur $nomAcheteur</p>";
            echo "<p>Adresse de l'acheteur: $adresseAcheteur</p>";
            echo "<p>Numéro de téléphone de l'acheteur: $TelAcheteur</p>";
        }
        ?>
    </div>
</div>
</body>
</html>
