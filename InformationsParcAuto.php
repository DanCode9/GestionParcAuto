<?php
session_start();
include 'Navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chiffre d’affaire réalisé</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
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

        .revenue {
            font-size: 24px;
            color: #007BFF;
        }

        .not-available {
            font-size: 18px;
            color: #FF0000;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Total Revenue</h1>
    <?php
    if (isset($_SESSION['ChiffresAffaire'])) {
        $ChiffresAffaire = $_SESSION['ChiffresAffaire'];
        echo "<p class='revenue'>Montant du chiffre d’affaire réalisé: $ChiffresAffaire €</p>";
    } else {
        echo "<p class='not-available'>Total Revenue is not available.</p>";
    }
    ?>
</div>
</body>
</html>
