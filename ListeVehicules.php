<?php
require_once 'Vehicule.php'; // Include the class definition
session_start(); // Make sure to include this
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Véhicules</title>
    <style>
        *{
            font-family:"Roboto Light", sans-serif;
            padding: 0;
            margin:0;
            box-sizing: border-box;
            text-decoration: none;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black;
            font-size: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #3a3a3a;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #e1e1e1;
        }
    </style>
</head>
<body>
<?php include ('Navbar.php')?>

<h1 style="text-align: center;margin:20px">Liste des Véhicules</h1>

<table>
    <tr>
        <th>Marque</th>
        <th>Modèle</th>
        <th>Année</th>
        <th>Énergie</th>
        <th>Boîte de vitesse</th>
        <th>Disponibilité</th>
        <th>Prix d'achat €</th>
        <th>Frais de remise €</th>
    </tr>

    <?php foreach ($_SESSION['vehicules'] as $vehicle): ?>
        <tr>
            <td><?php echo $vehicle->getMarque(); ?></td>
            <td><?php echo $vehicle->getModele(); ?></td>
            <td><?php echo $vehicle->getAnnee(); ?></td>
            <td><?php echo $vehicle->getEnergie(); ?></td>
            <td><?php echo $vehicle->getBoiteVitesse(); ?></td>
            <td><?php echo $vehicle->getDisponibilite() ? "Disponible" : "Non disponible"; ?></td>
            <td><?php echo $vehicle->getPrix(); ?></td>
            <td><?php echo $vehicle->getFraisDeRemise(); ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
<style>
    body{
        background-color: #e9ecef;
    }
</style>