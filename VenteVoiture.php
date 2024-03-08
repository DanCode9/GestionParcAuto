<?php
include_once "Vehicule.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendre une voiture</title>
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

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
        input{
            padding: 8px;
        }
    </style>
</head>
<body>
<?php include 'Navbar.php'?>
<h1>Vente Voiture</h1>
<div class="container">
    <form action="TraitementVenteVehicule.php" method="POST">
        <label for="vehicle_index">Selectioner une voiture:</label>
        <select name="vehicle_index" id="vehicle_index">
            <?php
            if (isset($_SESSION['vehicules'])) {
                foreach ($_SESSION['vehicules'] as $index => $vehicule) {
                    echo "<option value='$index'>$vehicule->marque $vehicule->modele</option>";
                }
            }
            ?>
        </select>
        <label for="nomAcheteur" > Nom Acheteur
            <input type="text" name="nomAcheteur" id="nomAcheteur"/>
        </label>
        <label for="prenomAcheteur"> Prenom Acheteur
            <input type="text" name="prenomAcheteur" id="prenomAcheteur"/>
        </label>
        <label for="adresseAcheteur"> Adresse Acheteur
            <input type="text" name="adresseAcheteur" id="adresseAcheteur"/>
        </label>
        <label for="numTelAcheteur"> Tel Acheteur
            <input type="number" name="numTelAcheteur" id="numTelAcheteur"/>
        </label>
        <button type="submit">Vendre!</button>
    </form>
</div>
</body>
</html>
