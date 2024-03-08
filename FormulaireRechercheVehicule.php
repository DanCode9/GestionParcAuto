<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Recherche</title>
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
        }

        h1 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 12px 20px;
            cursor: pointer;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        .formContainer{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            border: 2px solid black;
            padding: 110px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: fit-content;
        }
    </style>
</head>
<body>
<?php include 'Navbar.php' ?>

<div class="container">
    <h1>Chercher une voiture</h1>
    <div class="formContainer">
        <form method="POST" action="ResultatRecherche.php">
            <label for="marque">Marque de la voiture:</label>
            <input type="text" name="marque" id="marque" required>

            <label for="annee">Année:</label>
            <input type="number" name="annee" id="annee" required>

            <button type="submit">Search</button>
        </form>
    </div>
</div>
</body>
</html>
